<?php
$languages = pll_the_languages(['raw' => 1, 'hide_current' => 1]);
$currentLang = pll_current_language();
if(isset($languages) && count($languages) >0):?>
    <div class="lags-wrp">
        <div class="current">
            <?php echo $currentLang?>
            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="9.673" height="5.395" viewBox="0 0 9.673 5.395">
                <g id="Group_7_Copy_8" data-name="Group 7 Copy 8" transform="translate(9.306 0.558) rotate(90)">
                    <path id="Line_4" data-name="Line 4" d="M4.08,4.231.1.25" transform="translate(0.05 0.09)" fill="none" stroke="#6fa935" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Line_4_Copy" data-name="Line 4 Copy" d="M4.08-4.231.1-.25" transform="translate(0.05 8.849)" fill="none" stroke="#6fa935" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                </g>
            </svg>

        </div>
        <ul class="exists">
            <?php foreach($languages as $lang):?>
                <li>
                    <a href="<?php echo $lang['url']?>"><?php echo $lang['name']?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif;?>