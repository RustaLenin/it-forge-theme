<?php ?>

<div class="calc_wrap">

    <div class="calc_content">

        <nice-chooser data="itfstate.main_page.calculator.chooser_site" listen="state_updated"></nice-chooser>
        <nice-chooser data="itfstate.main_page.calculator.chooser_service" listen="state_updated"></nice-chooser>

    </div>

    <div class="calc_footer">

        <div class="calc_sum">
            <span class="text">Cost: </span><span></span>
        </div>

        <div class="calc_date">
            <span class="text">Deadline: </span><span></span>
        </div>

        <div class="calc_order">
            <?php echo nice_button([ 'size' => 'medium', 'text' => 'Заказать' ]); ?>
        </div>

    </div>


</div>