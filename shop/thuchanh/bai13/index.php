<?php
header("Content-type: text/xml");
function xml_entities($string) {
    return str_replace(
            array("&", "<", ">", '"', "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $string
    );
}
include('connect.php');
$sl = "select * from news order by id desc";
$exc = mysqli_query($connect, $sl);
$items = '';
while ($row = mysqli_fetch_array($exc)) {
    $items .= '<item>';
    $items .= "<title>" . xml_entities($row['title']) . "</title>";
    $items .= "<link>" . xml_entities($row['link']) . "</link>";
    $items .= "<description>" . xml_entities($row['description']) . "</description>";
    $items .= '</item>';
}
echo'<?xml version="1.0" ?><rss version="2.0"><channel><title>Học Web | Học làm web pro</title><link>http://hocweb.com.vn</link><description>Website hocweb.com.vn được hình thành từ ý tưởng
giúp các em sinh viên trường đại học công nghiệp thực phẩm có 1
nơi học tập thực tế gắn với nhu cầu doanh nghiệp từ đó lan rộng
ra mô hình học tập thực tế cùng doanh nghiệp cho các sinh viên
trong các tỉnh thành </description>
echo'.$items.'</channel>';
echo('</rss>')
?>