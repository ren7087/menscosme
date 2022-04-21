<div id="<?php echo $key; ?>Message" class="<?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>"><?php echo $message; ?></div>

<!-- ローディングが遅いページにはこれを記載してもいいかも -->
<?php /*
    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><?php echo $this->Html->image('loading.GIF'); ?></span>
        </div>
    </div>

*/ ?>