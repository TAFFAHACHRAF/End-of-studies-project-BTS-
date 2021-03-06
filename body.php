        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
<section id="Evenements">
	<div class="container pt-5 pb-10">
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
          <div class="owl-carousel-1col owl-nav-top" data-dots="true">
          
          <?php
          require("connexion.php");
          $r="select * from annonce where audicion='public' order by idAn desc";
          $res=$conex->query($r);
              if($res->num_rows >0 ){
                  while($d=$res->fetch_assoc()){
                  ?>
                    <div class="item ">
                    <a href="annonceDetail.php?id=<?=$d['idAn']?>">
                        <div class="project mb-30 border-2px">
                          <?php if($d['imgAnnonce']){?>
                          <div class="thumb">
                            <img class="img-fullwidth" alt="" height="420px" src="images/annonce/<?=$d['imgAnnonce']?>">
                          </div>
                        <?php }else {?>
                          <div class="thumb">
                            <img class="img-fullwidth" alt=""  src="images/annonce/default.png">
                          </div>
                        <?php }?>
                        <div class="blog-date" >
                           <?php
                              $dat=explode("/",$d['date']);
                              $m=DateTime ::createFromFormat('!m',$dat[1]);
                              $month= $m->format('F');
                            ?>
                          <p><span class="blog-day"><?=$dat[0]?></span> <?= $month ?></p>
                        </div>
                          <div class="project-details p-15 pt-5 pb-10">
                            
                            <ul class="list-inline  text-center m-0 p-10">
                              <li class="current-fund"><strong>Titre </strong> <br><b style="color :#B73448 ;font-size: 14px; "><?=$d['titre']?></b></li>
                            </ul>
                          </div>
                        </div>
                        </a>
                      </div>
                     
                    
                  <?php
                }
             }
             ?>      
          </div>
          </div>
        </div>
      </div>
    </section>
    <style>
          .blog-date {
              background: #B73448;
              border: 4px solid #fff;
              border-radius: 50%;
              bottom: 80px;
              color: #fff;
              height: 70px;
              left: 0;
              line-height: 15px;
              position: absolute;
              text-align: center;
              width: 70px;
          }
          .blog-date p {
              font-weight: 400;
              margin: 0;
              padding: 7px 10px;
              font-size: 16px;
              display: block;
              line-height: 20px;
          }
          .blog-date .blog-day {
              font-size: 14px;
          }
          </style>
    <!-- Section: Sevices -->

    <!-- Section: About -->
    <section id="plus">
      <div class="container mt-0 pb-70 pt-0">
        <div class="section-content">
          <div class="row mt-10">
            
            <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                 <h3 class="mt-0">C'est quoi <span class="text-uppercase text-theme-color-2" style="color:#B73448"> BTS?</span></h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <p class="mb-15">
                          <strong>BTS</strong> sont des formations de courte dur??e sur des disciplines vari??es auxquelles il est possible d???acc??der apr??s le baccalaur??at pour une dur??e de 2 ans. ?? l???issue de leurs dipl??mes, les laur??ats peuvent poursuivre leurs ??tudes dans les diff??rentes ??coles d???ing??nieurs marocaines ou les ??coles de commerce ou encore des ??coles sp??cialis??es.
                          De plus, ce type de profil est tr??s demand?? au march?? de travail o?? les petites et moyennes entreprises sont pr??dominantes, ou de poursuivre des ??tudes pour l???obtention d???un niveau Bac+3 (licence) ou plus (master, cycle d???ing??nieur, etc.).

                          Conditions Inscription Formation et Fili??res BTS Chichaoua
                          La formation pour la pr??paration du BTS est de deux ann??es scolaires. Ce cycle est ouvert sur ??tude de dossiers surtout aux bacheliers techniques sauf pour la sp??cialit?? ENERGETIQUE qui ouvre ses portes ??galement aux bacheliers des sections Sciences Exp??rimentales et Sciences Math??matiques.
                          
                  	      </p>
                        </div>  
                    </div>
              </div>
        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <h3 class=" mt-0">Bienvenue ?? <span class="text-uppercase text-theme-color-2" style="color:#B73448">  BTS CHICHAOUA </span></h3>
              
              <p class="mb-15"><strong>MCW </strong>Le technicien sup??rieur en multim??dia et conception web est charg?? de la conception graphique et visuelle, de la participation aux d??veloppement d???applications multim??dia ainsi que de la cr??ation et de l???optimisation de sites web statiques et dynamiques ?? partir d???une commande initiale pour laquelle sont pr??cis??s les besoins et les contraintes.</p>
              <p class="mb-10"><strong>PME </strong>Le Brevet de Technicien Sup??rieur AG forme des assistants en gestion, dont la mission est de g??rer la relation avec le client ou le fournisseur. Vous serez aussi capable de planifier et d???organiser des activit??s tout en prenant en compte les ressources disponibles. Polyvalent, vous aurez un poste de communicant global charg?? du bon fonctionnement de l???entreprise.</p>
               
            </div>
      </div>
    </section>

   <!-- Divider: why choose us 1 -->
    <section class="divider parallax" style="text-align:center" data-bg-img="images/bg/c2.jpg" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0" >
        <div class="row">
          <div class="col-md-8 col-md-offset-4">
            
        </div>
      </div>
    </section>
     <!-- Section: teachers -->
    <section>
      <div class="container pt-70 pb-40"> 
        <div class="section-title text-center">
      </div>
    </section>

    <!-- Section: Contact -->
    <section  id="Contact" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="images/bg/c2.jpg">
      <div class="container pt-40 pb-60">
        <div class="section-content">
          <div class="row">
            <div  class="col-md-12 wow fadeInLeft mt-10 pr-30" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Contactez nous !</h3>
              <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Nom <small>*</small></label>
                      <input id="form_name" name="form_name" type="text" placeholder="votre nom" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_email">Email <small>*</small></label>
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="votre email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="form_message">Message <small>*</small></label>
                  <textarea id="form_message" name="form_message" class="form-control required" rows="2" placeholder="votre message"></textarea>
                </div>
                <div class="form-group">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Envoyer</button>
                </div>
              </form>
              <!-- Job Form Validation-->
              <script type="text/javascript">
                $("#volunteer_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
           </div>
          </div>
        </div>
      </div>
    </section>
    
   <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
      </div>
    </section>