<!--============================= EVENTS =============================-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Pengumuman</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Pengumuman Terbaru </a>
                    </li>

                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                  <?php foreach($data->result() as $row):?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="event-heading">
                                    <h3><?php echo $row->pengumuman_judul;?></h3>
                                    <p><?php echo $row->pengumuman_deskripsi;?></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="event-date">
                                    <h4><?php echo date("d", strtotime($row->pengumuman_tanggal));?></h4> <span><?php echo date("M Y", strtotime($row->pengumuman_tanggal));?></span>
                                </div>
                                <span class="event-time"><?php echo date("H:i", strtotime($row->pengumuman_tanggal)).' WIB';?></span>
                            </div>
                      </div>
                      <hr class="event-underline">
                  </div>
                <?php endforeach;?>

      <div class="col-md-12 text-center">
        <?php echo $page;?>
    </div>
</div>

</div>
</div>
</div>
</section>
<!--//END EVENTS -->