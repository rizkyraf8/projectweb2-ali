<div class="content-wrapper">
    <section class='content-header'>
        
    </section>
    <section class="content">
        <div class="container-fluid">
            <?php
            if (@$content) {
                $this->load->view($content);
            }
            ?>
        </div>
    </section>
</div>