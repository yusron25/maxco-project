

<section class="discover-area padding-top-110 padding-bottom-80"  >
   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title extra"><?=$this->lang->line('gallery') ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php for ($i=0;$i<10;$i++): ?>
                   <div class="col-sm-3 my-3">
                       <div class="card" >
                            <img  src="/assets/images/logo/maxco-logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Image Description</p>
                            </div>
                        </div> 
                    
                </div>
 
                <?php endfor ?>

                
            </div>
        </div>  
    
    
</section>
