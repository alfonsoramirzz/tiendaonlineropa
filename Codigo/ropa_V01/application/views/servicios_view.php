<?php $this->load->view('head/librerias_view'); ?>
<?php $this->load->view('header/header_view'); ?>

<div class="row">
    <!--Nav Bar -->
    <nav class="col-xs-3 bs-docs-sidebar">
        <ul id="sidebar" class="nav nav-stacked fixed">
            <li>
                <a href="#GroupA">Group A</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupASub1">Sub-Group 1</a></li>
                    <li><a href="#GroupASub2">Sub-Group 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#GroupB">Group B</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupBSub1">Sub-Group 1</a></li>
                    <li><a href="#GroupBSub2">Sub-Group 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#GroupC">Group C</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupCSub1">Sub-Group 1</a></li>
                    <li><a href="#GroupCSub2">Sub-Group 2</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!--Main Content -->
    <div class="col-xs-9">
        <section id="GroupA" class="group">
            <h3>Group A</h3>
            <div id="GroupASub1" class="subgroup">
                <h4>Group A Sub 1</h4>
            </div>
            <div id="GroupASub2" class="subgroup">
                <h4>Group A Sub 2</h4>
            </div>
        </section>
        <section id="GroupB" class="group">
            <h3>Group B</h3>
            <div id="GroupBSub1" class="subgroup">
                <h4>Group B Sub 1</h4>
            </div>
            <div id="GroupBSub2" class="subgroup">
                <h4>Group B Sub 2</h4>
            </div>
        </section>
        <section id="GroupC" class="group">
            <h3>Group C</h3>
            <div id="GroupCSub1" class="subgroup">
                <h4>Group C Sub 1</h4>
            </div>
            <div id="GroupCSub2" class="subgroup">
                <h4>Group C Sub 2</h4>
            </div>
        </section>    
    </div>
</div>

<?php $this->load->view('footer/footer_view'); ?>