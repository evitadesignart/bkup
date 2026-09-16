<?php
// counter.php
$count_file = __DIR__ . '/counts.json';

function track_page_view($page_id) {
    global $count_file;
    
    if (!file_exists($count_file)) {
        file_put_contents($count_file, json_encode([]));
    }
    
    $fp = fopen($count_file, 'c+');
    if ($fp && flock($fp, LOCK_EX)) {
        $size = filesize($count_file);
        $content = $size > 0 ? fread($fp, $size) : '{}';
        $counts = json_decode($content, true);
        if (!is_array($counts)) {
            $counts = [];
        }
        
        if (!isset($counts[$page_id])) {
            $counts[$page_id] = 0;
        }
        $counts[$page_id]++;
        
        ftruncate($fp, 0);
        rewind($fp);
        fwrite($fp, json_encode($counts));
        flock($fp, LOCK_UN);
        fclose($fp);
    }
}

function get_all_page_views() {
    global $count_file;
    if (file_exists($count_file)) {
        $content = file_get_contents($count_file);
        $data = json_decode($content, true);
        if (is_array($data)) {
            return $data;
        }
    }
    return [];
}
?>
