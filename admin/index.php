<?php
include 'header.php';

$hotels = $db->count("hotels", '*', ['deleted' => 0]);
$cards = $db->count("cards", '*', ['deleted' => 0]);
$cakes = $db->count("cakes", '*', ['deleted' => 0]);
$music = $db->count("music", '*', ['deleted' => 0]);
$caterers = $db->count("caterers", '*', ['deleted' => 0]);
$mehandi = $db->count("mehandi", '*', ['deleted' => 0]);
$event_planners = $db->count("event_planners", '*', ['deleted' => 0]);
$decorations = $db->count("decorations", '*', ['deleted' => 0]);
$parlour = $db->count("parlours", '*', ['deleted' => 0]);
$photographers = $db->count("photographers", '*', ['deleted' => 0]);
?>

<?php if ($type == 'admin') {
    ?>
    <div class="site-content">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="m-y-0">Dashboard</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 " >
                        <div class="widget widget-tile-2 bg-primary m-b-30" >
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Hotels</div>
                                <div class="wt-number"><?php echo $hotels; ?> Hotels </div>
                                <a href="hotel-manage.php"><div class="wt-text">View Hotels>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-accounts-outline"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-warning m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Decor & Flourist</div>
                                <div class="wt-number"><?php echo $decorations; ?> Decors </div>
                                <a href="decor-manage.php"><div class="wt-text">View Decors & Florists>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-success m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Photographers</div>
                                <div class="wt-number"><?php echo $photographers; ?> Photographers </div>
                                <a href="photographer-manage.php"><div class="wt-text">View Photographers>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-danger m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Beauty Parlours </div>
                                <div class="wt-number"><?php echo $parlour; ?> Beauty Parlour</div>
                                <a href="parlour-manage.php"><div class="wt-text">View Beauty Parlours>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-check-all zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-success m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Caterers</div>
                                <div class="wt-number"><?php echo $caterers; ?> Caterers </div>
                                <a href="caterer-manage.php"><div class="wt-text">View Caterers>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-accounts-outline"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-danger m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Wedding Cards</div>
                                <div class="wt-number"><?php echo $cards; ?> Cards </div>
                                <a href="card-manage.php"><div class="wt-text">View Wedding Cards>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-primary m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Music System</div>
                                <div class="wt-number"><?php echo $music; ?> Music System</div>
                                <a href="music-manage.php"><div class="wt-text">View Music Systems>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-warning m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Mehandi</div>
                                <div class="wt-number"><?php echo $mehandi; ?> Mehandi</div>
                                <a href="mehandi-manage.php"><div class="wt-text">View Mehandies>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-check-all zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-primary m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Cakes</div>
                                <div class="wt-number"><?php echo $cakes; ?> Cakes </div>
                                <a href="cake-manage.php"><div class="wt-text">View Cakes>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-accounts-outline"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="widget widget-tile-2 bg-warning m-b-30">
                            <div class="wt-content p-a-20 p-b-50">
                                <div class="wt-title">Event Planners</div>
                                <div class="wt-number"><?php echo $event_planners; ?> Planners </div>
                                <a href="event-planner-manage.php"><div class="wt-text">View Event Planners>></div></a>
                            </div>
                            <div class="wt-icon">
                                <i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php } ?>





<?php
include './footer.php';
?>
