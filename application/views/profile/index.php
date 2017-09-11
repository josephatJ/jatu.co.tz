
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
<!--            <div class="row tile_count">-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>-->
<!--                    <div class="count">2500</div>-->
<!--                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>-->
<!--                    <div class="count">123.50</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>-->
<!--                    <div class="count green">2,500</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>-->
<!--                    <div class="count">4,567</div>-->
<!--                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>-->
<!--                    <div class="count">2,315</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>-->
<!--                    <div class="count">7,325</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--            </div>-->
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h2 class="page-header">Taarifa binafsi</h2>
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $member_info[0]->sname." ".$member_info[0]->mname.", ".$member_info[0]->fname; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img src="" class="img-circle img-responsive"> </div>
                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table member-info">
                                        <tbody>
                                        <tr>
                                            <td>Namba ya uanachama</td>
                                            <td><?php echo $member_info[0]->memberid; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kazi</td>
                                            <td><?php echo $member_info[0]->job; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Mdhamini</td>
                                            <td><?php ?></td>
                                        </tr>

                                        <tr>
                                            <td>Tarehe ya kuzaliwa</td>
                                            <td><?php echo $member_info[0]->birth_date; ?></td>
                                        </tr>


                                        <tr>
                                            <td>Jinsia</td>
                                            <td><?php echo $member_info[0]->gender; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tarehe ya usajili</td>
                                            <td><?php echo substr($member_info[0]->addedat,0, 10); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Barua pepe</td>
                                            <td><?php echo $member_info[0]->email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td><?php echo $member_info[0]->phoneno; ?><br> </td>
                                        </tr>

                                        <tr>
                                            <td>Makazi</td>
                                            <td><?php echo $member_info[0]->region.", ".$member_info[0]->district.",<br> ". $member_info[0]->ward. "<br>".$member_info[0]->village; ?><br></td>
                                        </tr>
                                        <tr>
                                            <td>Ndugu</td>
                                            <td><?php echo $member_info[0]->sfname. " ". $member_info[0]->ssname; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="links" style="text-align: center;">
                                        <a href="<?php echo base_url().'index.php/buys/index/'.$member_info[0]->id.'/'.$user_type; ?>" class="btn btn-primary">Taarifa ya manunuzi</a>
                                        <a href="<?php echo base_url().'index.php/network/index/'.$member_info[0]->id.'/'.$user_type; ?>" class="btn btn-primary">Mtandao</a>
                                        <a href="<?php echo base_url().'index.php/gains/index/'.$member_info[0]->id.'/'.$user_type; ?>" class="btn btn-primary">Taarifa ya mapato</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /page content -->