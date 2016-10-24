@extends('layouts.app')

@section('content')
<section class="navigation">
    <div class="container">
        <div class="row">
         <div class="col-lg-8">
           <h2><i class="fa fa-envelope"></i> Contact</h2>
            <p>Indien u meer informatie wenst over Ring Me kan u ons dagelijks contacteren via her online contact formulier<br>
               Voor ondersteuning kan u steeds een ticket aanmaken in het gebruikerspaneel.
          </p>
           </div>
        </div>
    </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
             <div class="col-lg-6 col-md-offset-1">
               <h3>Stel uw vraag</h3>
               <form role="form" action="" method="post">

                 <div class="form-group">
                   <label for="fname" class="">Voornaam <span class="text-danger">*</span></label>
                   <input type="text" name="fame" id="fname" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="lname" class="">Achternaam <span class="text-danger">*</span></label>
                     <input type="text" name="lname" id="lname" class="form-control">
                </div>

                 <div class="form-group">
                     <label for="email" class="">Email <span class="text-danger">*</span></label>
                     <input type="text" name="email" id="email" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="phone" class="">Telefoonnummer <span class="text-danger">*</span></label>
                     <input type="text" name="phone" id="phone" class="form-control">
                </div>

                 <div class="form-group">
                     <label class="">Uw bericht <span class="text-danger">*</span></label>
                     <textarea name="message" id="message" rows="7" class="form-control"></textarea>
                </div>

                 <button type="submit" class="btn btn-primary pull-right"> Verzenden</button>
                 </form>
               </div>


            </div>
        </div>
        </section>
@endsection
