<?php $term = get_the_terms(get_the_ID(), 'category'); ?>

<article id="card-post_<?php echo get_the_ID(); ?>" class="card-post_blog">
  <div class="featured-croped">
    <a href="<?php the_permalink(); ?>">
      <div class="in-croped">
        <div class="divide-obj"></div>
    <?php if(has_post_thumbnail()) { the_post_thumbnail();} else { echo '<img src="' . esc_url( get_stylesheet_directory_uri()) .'/img/thumb.png" alt="'. get_the_title() .'" />'; }?>
      </div>
    </a>
  </div>

  <div class="vcps-info">
      <div class="term-box">
      <ul class="nav-sub-term-yp">
            <?php
            if( $term ):
            $i = 0;
            foreach ( $term as $term_id ) {
            $i++;
            $slug = $term_id->slug;
            // if($slug == 'uncategorized'){ continue; }
                if($i <= 3):
                ?>
                <li class="<?php echo $term_id->slug; ?>"><?php echo $term_id->name; ?></li>
                <?php
                endif;
            } 
        else: 
            ?>
            <li class="none-cat"><?php echo esc_html__( 'ไม่มีหมวดหมู่', 'yp-core' ); ?></li>
            <?php
        endif;?>
        </ul>
      </div>
      <div class="title-box">
        <h3 class="vc-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
      </div>

    <div class="p_excerpt">
      <?php the_excerpt(); ?>
    </div>

    <div class="grid-info">
        <div class="post-meta">
            <span class="post_date">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <?php echo get_the_date(); ?>
            </span>
        </div>
        <a class="vc-view-more" href="<?php echo get_permalink( get_the_ID() ); ?>">
            <svg xmlns=" http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            <?php echo esc_html__( 'Read More', 'yp-core' ); ?>
        </a>
    </div>
  </div>
</article>

<style>
    /*card*/
{
    display: grid;
    grid-gap: 20px;
}
svg {
    stroke: #b69652;
}
article.card-post_blog {
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    /* border-top-left-radius: 0;
    border-bottom-right-radius: 0; */
    padding: 0;
    position: relative;
    background: #fff;
}
article.card-post_blog img {
    display: block;
    border-radius: 5px;
    /* border-top-left-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; */
    height: 160px;
    width: 100%;
    object-fit: cover;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
article .divide-obj {
 transition: all ease-in-out 350ms;
 height: 100%;
 width: 100%;
 z-index: 9999;
 position: absolute;
 background: #e7b520;
 background: linear-gradient(135deg, #83650b 15%,#e7b520 100%);
 opacity: 0.25;
 border-radius: 5px;
 /* border-top-left-radius: 0; */
 border-bottom-right-radius: 0;
 border-bottom-left-radius: 0;
 bottom: -200px;
}
article:hover .divide-obj {
 bottom: 0;
}
article .featured-croped {
    display: block;
    position: relative;
    overflow: hidden;
}
article h3.vc-title a {
    font-size: 16px;
    color: #000;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    position: relative;
    overflow: hidden;
    line-height: 1.4;
    margin: 0;
    font-weight: 600;
}
article h3.vc-title {
    display: block;
    position: relative;
    margin: 0;
    min-height: 40px;
}
article .vcps-info {
    padding: 15px;
    display: grid;
    grid-gap: 7px;
}
article .p_excerpt p {
    font-size: 13px;
    font-weight: 500;
    color: #8d8d8d;
}
article .p_excerpt {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    position: relative;
    overflow: hidden;
    min-height: 37px;
}
article svg {
    width: 22px;
    height: 22px;
}
article .grid-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
}
article .grid-info span.post_date {
    font-size: 13px;
    display: flex;
    align-items: flex-end;
    gap: 5px;
    justify-content: left;
    color: #8d8d8d;
}
article .grid-info {
 border-top: 1px solid #e6e1dd;
 padding-top: 10px;
 margin-top: 2px;
}
article h3.vc-title a:hover {
 color: #b69652;
}
article.card-post_blog a.vc-view-more svg {
 fill: #b69652;
 stroke: transparent;
 display: none;
}
article.card-post_blog a.vc-view-more {
 background: rgb(182 150 82);
 -webkit-appearance: none;
 border: 0;
 border-radius: 50px;
 color: #fff;
 padding: 8px 10px;
 font-size: 13px;
 line-height: 1.2;
 font-weight: 400;
 display: -webkit-box;
 -webkit-line-clamp: 2;
 -webkit-box-orient: vertical;
 position: relative;
 overflow: hidden;
 width: auto;
 text-align: center;
}
article.card-post_blog a.vc-view-more:hover {opacity: 0.7;}
article .grid-info {
 align-items: center;
}
article.card-post_blog ul.nav-sub-term-yp li {
    display: inline-block;
    list-style: none;
    /* background: linear-gradient(135deg, #83650b 15%,#e7b520 100%);
    box-shadow: 0 0 8px rgb(164 125 62 / 35%); */
    border: 0;
    border-radius: 10px;
    border-top-left-radius: 0;
    border-bottom-right-radius: 0;
    color: #fff;
    padding: 5px 10px;
    font-size: 13px;
    line-height: 1.2;
    font-weight: 600;
    display: -webkit-inline-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    position: relative;
    overflow: hidden;
    text-align: center;
    background: linear-gradient(226deg, rgb(219 208 199) 0%, rgb(126 104 79) 74%);
}
article.card-post_blog ul.nav-sub-term-yp {
    padding: 0;
    margin: 0;
}
article .term-box {
   height: 27px;
}
article.card-post_blog ul.nav-sub-term-yp li {
    border-radius: 50px;
    font-size: 12px;
    padding: 3px 10px;
    background: transparent;
    border: 1px solid #b69652;
    color: #b69652;
}
/*destop medium*/
@media (max-width: 1600px){
}
/*laptop*/
@media (max-width: 1280px){
}
/*ipad pro (large tablet)*/
@media (max-width: 1024px) and (min-width: 992px){
   article.card-post_blog img {
       height: 176px;
   }
}
/*ipad (tablet)*/
@media (max-width: 991.98px) {
   article.card-post_blog img {
       height: 176px;
   }
}
/*iphone8 (smartphone)*/
@media (max-width: 575.98px) {
   article.card-post_blog img {
       height: 145px;
   }
   article h3.vc-title {
       min-height: 100%;
   }
   article .p_excerpt {
       min-height: 100%;
   }
}
/*iphone5 (small smartphone)*/
@media (max-width: 360px) {

}

</style>