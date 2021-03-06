

<div id="home" class="carousel slide padtopslider" data-ride="carousel" data-interval="5000"> 


  <div class="carousel-inner">
    <?php $c = 0; foreach ($slider as $slide ): ?>
        <div class="carousel-item <?=($c==0)?'active':''?>">
          <img src="/<?=$slide?>" class="d-block w-100" alt="Slider PT Maxco Tunggal Perkasa">
        </div>
    <?php $c++; endforeach ?>
  </div>
  <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- discover area start  -->
<section class="discover-area padding-top-110 padding-bottom-80" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">What We Do</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-3">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-chat"></i> -->
                         <img src="/assets/images/services/shipment.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">International Freight Forwarder</h4>
                        <p><?=$this->lang->line('InternationalForwarderDesc') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-shield-1"></i> -->
                         <img src="/assets/images/services/boat.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Shipping</h4>
                        <p><?=$this->lang->line('EMKLDesc') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-cloud"></i> -->
                         <img src="/assets/images/services/ppjk.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">PPJK</h4>
                        <p><?=$this->lang->line('PPJKDesc') ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-layers-2"></i> -->
                        <img src="/assets/images/services/delivery-truck.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Inland Transportation</h4>
                        <p><?=$this->lang->line('InlandTransportationsDesc') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discover area start  -->

<section class="discover-area padding-top-110 padding-bottom-80" id="profile">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12" style="text-align: center;">
                <h3 style="text-decoration: underline;"><?=$this->lang->line('profile_visinmisi')?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" >                    
                <div class="card" style="min-height: 300px">
                    <div class="card-body">
                        <h5 style="text-align:center;"><?=$this->lang->line('profile_visititle')?></h5>
                        <p><?=$this->lang->line('profile_visidesc')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >  
                <div class="card" style="min-height: 300px">
                    <div class="card-body">
                        <h5 style="text-align:center;"><?=$this->lang->line('profile_misititle')?></h5>
                         <p><?=$this->lang->line('profile_misidesc')?></p>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <a href="/profile" class="btn btn-primary"><i>Read More... </i></a>
    </div>
</section>


<div class="contact-form-area-02 contact-bg padding-bottom-120 padding-top-120" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-area-wrapper" ><!-- contact area wrapper -->
                    <span class="subtitle"><?=$this->lang->line('contact')?></span>
                    <div class="row">
                        <div class="col-4">
                            <?=$this->lang->line('contact_phone')?>
                        </div>

                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            021 292 88 123<br>021 292 88 006
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            E-mail
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            cs@maxco.id
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                           <?=$this->lang->line('profile_address')?>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            Jl. Marunda Makmur<br>
                            Kawasan Industri dan Pergudangan Marunda Center<br>
                            Blok A5 No. 7-8<br>
                            Segara Makmur, Kec. Tarumajaya, Bekasi 17211 
                        </div>
                    </div>
                    
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <p><?=$this->lang->line('ContactDesc')?></p>
                    <a href="/contact-us" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i> Get In Touch</a>
                </div><!-- //. contact area wrapper -->
            </div>
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="assets/images/contact/contact-us.jpg" alt="">
                    <a target="_blank" href="http://www.freepik.com">
                        <small style="color:#C1C1C1">Designed by pikisuperstar / Freepik</small>
                    </a>                    
                </div>
            </div>
        </div>
    </div>
</div>

&nbsp;
&nbsp;
&nbsp;
&nbsp;



