<div>
    <div class="container mt-5">
      <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-delay="0">
        <h2 class="heading font-weight-bold caveat mb-5" style="font-size: 52px;">Des plans adaptés pour votre entreprise</h2>

        <div class="switch-plan">

          <div class="d-inline-flex align-items-center" wire:ignore>
            <div class="period">Annuel</div>
            <a href="#" wire:click="togglePeriod" class="period-toggle js-period-toggle"></a>
            <div class="period"><span class="mr-2">Mensuel</span><span class="save-percent" style="background-color: #026469;">Profitez de 2 mois offerts</span></div>
          </div>

        </div>
      </div>

      <div class="row overflow-x-auto">
        <div class="col-lg-4 bg-white mb-2" data-aos="fade-up" data-aos-delay="0">
          <div class="pricing-item ">
            <h3>Standard</h3>
            <div class="period-change mb-4 d-block" wire:ignore>
              <div class="price-wrap">
                <div class="price">
                  <div>
                    <div>{{ format_currency(0) }}</div>
                    <div>{{ format_currency(0) }}</div>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
              <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Pour <strong>une seule application</strong>, utilisateurs illimités</span></li>
              <hr>
              <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span><strong>Koverae Cloud</strong> <i class="bi bi-cloud"></i></span></li>
            </ul>
            <div>
              <a target="__blank" style="background-color: #026469;" href="https://koverae.com/auth/register?nav_from=pricing_plan&choice=standard" class="btn btn-dark col-12 font-weight-bold">Commencer maintenant</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 shadow mb-2" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Spark</h3>
            <div class="period-change mb-4 d-block" wire:ignore>
              <div class="price-wrap">
                <div class="price">
                  <div>
                      <div>{{ format_currency(29990) }}<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">35.990 FCFA</sup></div>
                      <div>{{ format_currency(35990) }}<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">44.990 FCFA</sup></div>
                  </div>
                </div>
              </div>
              <div class="d-inline-flex align-items-center text-center period-wrap">
                <div class="d-inline-block mr-1">Par</div>
                <div class="d-block text-left period">
                  <div>
                    <div><b>Mois</b></div>
                    <div><b>Mois</b></div>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
              <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Toutes les <strong>applications</strong></span></li>
              <hr>
              <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span><strong>Koverae Cloud</strong> <i class="bi bi-cloud"></i></span></li>
            </ul>
            <div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="slug" value="{{ $this->period == 'Annuel' ? 'spark_yearly' : 'spark_monthly' }}">
                    <button type="submit" style="background-color: #026469;" class="btn btn-dark col-12 font-weight-bold text-uppercase">Acheter maintenant</button>
                </form>
              <a href="{{ route('demo') }}" class="btn btn-light col-12 mt-2 text-uppercase" style="color: #026469">Essai Gratuit</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 bg-white mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item ">
            <h3>Enterprise</h3>
            <div class="period-change mb-4 d-block" wire:ignore>
              <div class="price-wrap">
                <div class="price">
                  <div>
                        <div>{{ format_currency(89990) }}<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">112.990 FCFA</sup></div>
                        <div>{{ format_currency(107990) }}<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">134.990 FCFA</sup></div>
                  </div>
                </div>
              </div>
              <div class="d-inline-flex align-items-center text-center period-wrap">
                <div class="d-inline-block mr-1">Par</div>
                <div class="d-block text-left period">
                  <div>
                    <div><b>Mois</b></div>
                    <div><b>Mois</b></div>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
                <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Toutes les <strong>applications</strong></span></li>
                <hr>
                <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span><strong>Koverae Cloud</strong> <i class="bi bi-cloud"></i></span></li>
                <hr>
                <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Pluri-<strong>entreprises</strong> <i class="bi bi-building"></i></span></li>
                <hr>
                <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>API externe(s)</strong> <i class="bi bi-tools"></i></span></li>
            </ul>
            <div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="slug" value="{{ $this->period == 'Annuel' ? 'enterprise_yearly' : 'enterprise_monthly' }}">
                    <button type="submit" style="background-color: #026469;" class="btn btn-dark col-12 font-weight-bold text-uppercase">Acheter maintenant</button>
                </form>
                <a href="{{ route('demo') }}" class="btn btn-light col-12 mt-2 text-uppercase" style="color: #026469">Essai Gratuit</a>
            </div>
          </div>
        </div>

      </div>
      {{-- <p>{{ $this->period }}</p> --}}
      <!-- Apps -->
      <div class="col-12 text-center text-black pt-5 pb-3">
        <p>Les plans <strong>Spark</strong> et <strong>Enterprise</strong> incluent toutes les applications pour un prix unique :</p>
      </div>
      <div class="row justify-content-center text-center">
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/sales.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Ventes
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/pos.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                PDV
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/crm.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                CRM
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/inventory.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Inventaire
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/accounting.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Comptabilité
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/purchase.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Achats
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/mrp.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Fabrication
            </div>
        </div>
        <!-- POS -->
        <div class="col-4 col-md-3 col-lg-2 col-xl mb-3 text-black">
            <img src="{{ asset('assets/images/app-icons/website.png') }}" height="80px" alt="Point de vente" class="rounded-1">
            <div class="nowrap font-weight-bold mt-2">
                Web
            </div>
        </div>
      </div>

      <!-- Demo CTA -->
      <div class="text-center text-black col-12 mt-3">
        {{-- <a href="#" class=" d-inline-block text-decoration-none" style="font-size: 28px; color: #026469;">Et plus encore <i class="bi bi-arrow-right"></i></a> --}}
        <p>
            Tous nos plans incluent <strong>une assistance</strong>, <strong>un hébergement</strong> et <strong>une maintenance</strong> illimités.
            Sans frais cachés, sans limite de fonctionnalités ou de données : profitez d'une véritable transparence !
        </p>
        <div>
            (*) La remise est valable 12 mois, pour le plan initial commandé.
        </div>
      </div>
    </div>
</div>
