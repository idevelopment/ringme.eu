@extends('layouts.app')

@section('content')
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<section class="blue">
    <div class="container">
        <div class="row">
         <div class="col-lg-8">
           <h3>Ring Me</h3>
            <p>is de complete open source, cloud en standalone helpdesk oplossing voor bedrijven.
              Hierdoor heef u alles wat u nodig heeft om uw inkomend telefoon verkeer van uw bedrijf te verlagen en bied u klanten de mogelijkheid om gecontacteerd te worden wanneer ze dit wensen.
          </p>
           </div>
        </div>
    </div>
    </section>

<section class="intro">
  <div class="container">
    <ul class="row">
      <!-- 24/7 Ondersteuning -->
      <li class="col-md-3">
        <div class="icon"> <i class="fa fa-heart-o"></i> </div>
        <h5>24/7 Ondersteuning</h5>
        <p>Uw klanten hebben online de mogelijkheid om zelf te kiezen welke adviseur ze wensen te spreken: een vaste adviseur of een adviseur die eerst beschikbaar is
        </p>
        <a href="#." class="btn btn-custom">Lees Meer <i class="fa fa-long-arrow-right"></i></a> </li>

      <!-- Pro-Team -->
      <li class="col-md-3">
        <div class="icon"> <i class="fa fa-users"></i> </div>
        <h5>Service Level Agreement</h5>
        <p>U kan uw klanten toevoegen aan segmenten(Particulier, SOHO, Enterprise), per segment is een SLA gekoppeld dat u volledig kan beheren.<br><br></p>
        <a href="#." class="btn btn-custom">Lees Meer <i class="fa fa-long-arrow-right"></i></a> </li>

      <!-- Happy Customers -->
      <li class="col-md-3">
        <div class="icon"> <i class="fa fa-folder"></i> </div>
        <h5>Constante innovatie</h5>
        <p>Ons team is steeds bezig met het optimaliseren van Ring Me dit door wekelijkse/maandelijkse bugfixes als nieuwe features.<br><br></p>
        <a href="#." class="btn btn-custom">Lees Meer <i class="fa fa-long-arrow-right"></i></a> </li>

      <!-- Best Prices -->
      <li class="col-md-3">
        <div class="icon"> <i class="fa fa-server"></i> </div>
        <h5>Hosting</h5>
        <p>Indien u wenst heeft u de mogelijkheid om Ring Me op uw eigen server te hosten of u kan kiezen voor onze cloud oplossingen.<br><br></p>
        <a href="{{url('download')}}" class="btn btn-custom">Lees Meer <i class="fa fa-long-arrow-right"></i></a> </li>
    </ul>
  </div>
</section>

<section class="gray-light">
    <div class="container">
        <div class="row">
         <div class="col-lg-8">
           <h2>Ring Me v1.0 is beschikbaar</h2>
            <p>Dit is de eerste versie van Ring Me, u kan daarom nog kinderziekstes opmerken.
          </p>
           </div>

         <div class="col-lg-4">
           <div class="clearfix">&nbsp;</div>
            <div class="cta-btn">
              <a href="#" class="btn btn-default btn-lg">Download nu <i class="fa fa-angle-right"></i></a>
            </div>
         </div>
        </div>
    </div>
    </section>
@endsection
