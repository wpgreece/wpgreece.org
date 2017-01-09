    <?php if(!get_field('disable_social')): ?>

        <?php 

            $shortURL = get_permalink();

            $shortTitle = str_replace( ' ', '%20', get_the_title());

            $WPGCThumbnail = wp_get_attachment_url( get_post_thumbnail_id() );

            $twitterURL = 'https://twitter.com/intent/tweet?text='.$shortTitle.'&amp;url='.$shortURL.'&amp;via=WPGreece';

            $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$shortURL;

            $googleURL = 'https://plus.google.com/share?url='.$shortURL;

            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$shortURL. '&amp;media='.$WPGCThumbnail.'&amp;description='.$shortTitle;

            $mailTo = 'mailto:your@friend.com?subject=I wanted you to see this site&amp;body=Check out this site ' .$shortURL;

        ?>

        <div class ="social-sharing mobile-column tablet-column-10">

            <ul>

                <li>
                    <a class="share-link facebook" href="<?php echo $facebookURL ?>"><img src = "<?php bloginfo ( 'template_url' ) ?>/img/social/facebook.png" alt = "Share on Facebook" /></a> 
                </li>

                <li>
                    <a class="share-link twitter" href="<?php echo $twitterURL ?>"><img src = "<?php bloginfo ( 'template_url' ) ?>/img/social/twitter.png" alt = "Share on Twitter" /></a>
                </li>

                <li>
                    <a class="share-link google-plus" href="<?php echo $googleURL ?>"><img src = "<?php bloginfo ( 'template_url' ) ?>/img/social/google-plus.png" alt = "Share on Goolge+" /></a>
                </li>

                <li>
                    <a class="share-link pinterest" href="<?php echo $pinterestURL ?>"><img src = "<?php bloginfo ( 'template_url' ) ?>/img/social/pinterest.png" alt = "Pin it!" /></a>
                </li>

            </ul>

        </div>

    <?php endif; ?>