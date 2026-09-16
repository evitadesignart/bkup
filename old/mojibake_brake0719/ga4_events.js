/**
 * GA4 Event Tracking Script
 * 
 * 以下のイベントを自動的に検知して GA4 (gtag) へ送信します。
 * - 星座ボタンのクリック (select_zodiac)
 * - タロットカードのクリック (select_tarot)
 * - 占いボタンのクリック (click_draw_button)
 * - スクロール到達度 (scroll_depth_custom)
 * - SNSシェアボタンのクリック (share_content)
 * - 各種リンク/ナビゲーションのクリック (click_nav_link)
 * - 言語切り替え (change_language)
 */

document.addEventListener("DOMContentLoaded", function() {
    // gtagが定義されていない場合は何もしない
    if (typeof gtag !== "function") return;

    // ==========================================
    // 1. スクロール到達度のトラッキング (25%, 50%, 75%, 90%)
    // ==========================================
    const scrolledMarks = { 25: false, 50: false, 75: false, 90: false };
    window.addEventListener("scroll", function() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        if (scrollHeight <= 0) return;
        
        const percent = (scrollTop / scrollHeight) * 100;
        
        Object.keys(scrolledMarks).forEach(function(mark) {
            const m = parseInt(mark, 10);
            if (percent >= m && !scrolledMarks[m]) {
                scrolledMarks[m] = true;
                gtag('event', 'scroll_depth_custom', {
                    'percent_scrolled': m
                });
            }
        });
    });

    // ==========================================
    // 2. 各種クリックイベントのトラッキング
    // ==========================================
    document.body.addEventListener("click", function(e) {
        
        // --- A. 星座ボタン (zodiac.php など) ---
        const zodiacBtn = e.target.closest(".zodiac-button");
        if (zodiacBtn) {
            const zodiacName = zodiacBtn.getAttribute("data-zodiac-name") || zodiacBtn.innerText.trim();
            if (zodiacName) {
                gtag('event', 'select_zodiac', {
                    'zodiac_name': zodiacName
                });
            }
        }

        // --- B. タロット/色カード (tarotte.php, color24.php など) ---
        const cardElem = e.target.closest(".card");
        if (cardElem) {
            const cardName = cardElem.getAttribute("data-card-name");
            if (cardName) {
                gtag('event', 'select_tarot', {
                    'card_name': cardName
                });
            }
        }

        // --- C. 占い実行ボタン ---
        const drawBtn = e.target.closest("#drawButton");
        if (drawBtn) {
            const pageName = document.title.split("|")[0].trim() || window.location.pathname;
            gtag('event', 'click_draw_button', {
                'page_name': pageName
            });
        }

        // --- D. SNSシェアボタン ---
        const shareX = e.target.closest(".sns-x");
        const shareFb = e.target.closest(".sns-fb");
        const shareLine = e.target.closest(".sns-line");
        if (shareX) {
            gtag('event', 'share_content', { 'sns_type': 'X' });
        } else if (shareFb) {
            gtag('event', 'share_content', { 'sns_type': 'Facebook' });
        } else if (shareLine) {
            gtag('event', 'share_content', { 'sns_type': 'LINE' });
        }

        // --- E. ナビゲーション/リンク遷移 ---
        const navLink = e.target.closest(".nav-btn-gold, .tarot-btn, .footer-link-grid a");
        if (navLink) {
            gtag('event', 'click_nav_link', {
                'link_text': navLink.innerText.trim(),
                'link_url': navLink.getAttribute("href") || ''
            });
        }

        // --- F. 言語切り替え ---
        const langOpt = e.target.closest(".lang-option");
        if (langOpt) {
            const lang = langOpt.id.replace('lang-', ''); // 'jp' or 'en'
            gtag('event', 'change_language', {
                'language': lang
            });
        }
    });

    // ==========================================
    // 3. tarotte.php などの動的カード表示の監視 (DOM Observer)
    // ==========================================
    // ※JavaScriptで動的に追加されたカードがクリックされた場合も、
    // 上記の document.body のイベント委譲(Event Delegation)で捕捉できます。
});
