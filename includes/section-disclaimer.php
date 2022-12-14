<?php
$disclaimer_text = get_field( 'article_post_content_disclaimer_block_text','option' );
$disclaimer_url = get_field( 'article_post_content_disclaimer_block_url','option' );

if(get_field('article_post_content_disclaimer_block_text','option'))
{
    echo '<p class="font-weight-normal text-danger">' . $disclaimer_text . '<a class="text-decoration-none" href='.$disclaimer_url.' target="_blank"/> &#x1F6C8; </a></p>';
}

?>