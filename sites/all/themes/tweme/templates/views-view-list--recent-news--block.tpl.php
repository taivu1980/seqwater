<?php
//dpm ($row->subject);
// dsm(get_defined_vars());
?>

<?php
     foreach ($rows as $row){
         echo "<div class='row-recent-news'><a href='#'><div class='news'><span class='btn-news'>News</span></div>";
         print $row;
         echo "</a></div>";
     }