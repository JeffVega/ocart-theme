{{-- Practice areas grid --}}
@php
$areas = [
  [
    'id'      => 'dui',
    'title'   => 'DUI / DWI',
    'tagline' => 'Protect your license, record, and freedom.',
    'body'    => 'A DUI arrest in Orange County carries serious consequences — license suspension, fines, possible jail time, and a lasting criminal record. Our attorneys challenge the legality of the stop, the accuracy of breathalyzer and field sobriety tests, and every procedural detail that could lead to a reduction or full dismissal.',
    'points'  => ['First offense DUI', 'Felony DUI (injury or 4th+)', 'Underage DUI', 'Refusal charges', 'DMV hearings'],
  ],
  [
    'id'      => 'drug-crimes',
    'title'   => 'Drug Crimes',
    'tagline' => 'Defense at every level — misdemeanor to federal.',
    'body'    => 'Drug charges in California range from simple possession to trafficking with federal implications. We fight illegal search and seizure, challenge evidence handling, and pursue diversion programs and treatment alternatives whenever available to keep clients out of prison.',
    'points'  => ['Simple possession', 'Possession for sale', 'Transportation / distribution', 'Manufacturing', 'Federal drug charges'],
  ],
  [
    'id'      => 'assault',
    'title'   => 'Assault & Battery',
    'tagline' => 'Context and intent are everything.',
    'body'    => 'Assault and battery charges often stem from misunderstandings, self-defense situations, or exaggerated claims. We investigate the facts thoroughly, interview witnesses, and build a defense strategy that reflects the full reality of what happened.',
    'points'  => ['Simple assault/battery', 'Aggravated assault', 'Assault with a deadly weapon', 'Battery on a peace officer', 'Self-defense cases'],
  ],
  [
    'id'      => 'domestic-violence',
    'title'   => 'Domestic Violence',
    'tagline' => 'Sensitive, discreet, aggressive representation.',
    'body'    => 'Domestic violence charges can be filed on minimal evidence, and a conviction can affect child custody, immigration status, and employment. We handle these cases with the seriousness and confidentiality they demand, challenging restraining orders and building thorough defense narratives.',
    'points'  => ['Corporal injury on a spouse', 'Criminal threats', 'Violation of restraining order', 'Child abuse charges', 'False accusation defense'],
  ],
  [
    'id'      => 'theft',
    'title'   => 'Theft Crimes',
    'tagline' => 'Protecting your record and your future.',
    'body'    => 'Theft charges in California vary dramatically in severity. Even a misdemeanor shoplifting conviction can affect employment. We work to reduce charges, negotiate dismissals, and pursue diversion programs — minimizing the impact on your life.',
    'points'  => ['Shoplifting (PC 459.5)', 'Petty theft / grand theft', 'Robbery', 'Burglary', 'Identity theft / fraud'],
  ],
  [
    'id'      => 'robbery',
    'title'   => 'Robbery & Burglary',
    'tagline' => 'Serious charges demand serious defense.',
    'body'    => 'Robbery and burglary are felony offenses that carry potential state prison sentences. An experienced defense attorney can challenge identification evidence, intent, and the circumstances of the alleged crime to work toward the best possible outcome.',
    'points'  => ['Second degree robbery', 'First degree robbery', 'Carjacking', 'Residential burglary', 'Commercial burglary'],
  ],
  [
    'id'      => 'juvenile',
    'title'   => 'Juvenile Defense',
    'tagline' => 'Protecting futures, not just cases.',
    'body'    => 'A criminal record can derail a young person\'s entire future. The juvenile justice system has its own rules and procedures, and navigating it successfully requires specialized experience. We work to keep matters in juvenile court, pursue sealing and expungement, and minimize lasting consequences.',
    'points'  => ['Juvenile delinquency hearings', 'Diversion programs', 'Expungement of juvenile records', 'Transfer to adult court defense', 'School-related offenses'],
  ],
  [
    'id'      => 'expungement',
    'title'   => 'Expungements',
    'tagline' => 'Clean your record. Open new doors.',
    'body'    => 'Under California Penal Code 1203.4, many convictions can be dismissed and expunged from your record after completing probation. This can dramatically improve your employment prospects, housing applications, and professional licensing opportunities.',
    'points'  => ['Misdemeanor expungements', 'Felony reductions (PC 17b)', 'Certificate of rehabilitation', 'Governor\'s pardon', 'Prop 47 resentencing'],
  ],
];
@endphp

<section class="bg-navy-mid py-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    {{-- Jump nav --}}
    <div class="flex flex-wrap gap-3 mb-16">
      @foreach ($areas as $area)
      <a href="#{{ $area['id'] }}"
         class="border border-gold/30 text-gold/80 hover:bg-gold hover:text-navy hover:border-gold text-[11px] uppercase tracking-[0.15em] font-bold px-4 py-2 transition-all duration-200">
        {{ $area['title'] }}
      </a>
      @endforeach
    </div>

    {{-- Area sections --}}
    <div class="space-y-6">
      @foreach ($areas as $i => $area)
      <div id="{{ $area['id'] }}"
           class="bg-navy border border-gold/20 hover:border-gold/40 transition-colors scroll-mt-28">
        <div class="p-8 lg:p-10">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-8">
              <div class="flex items-center gap-4 mb-4">
                <span class="text-gold/40 font-display text-sm font-bold">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <div class="h-px flex-1 bg-gold/15"></div>
              </div>
              <h2 class="font-display text-4xl lg:text-5xl text-cream font-bold mb-2">{{ $area['title'] }}</h2>
              <p class="text-gold text-sm font-medium mb-5 italic font-display">{{ $area['tagline'] }}</p>
              <p class="text-cream/65 text-sm leading-relaxed">{{ $area['body'] }}</p>
            </div>

            <div class="lg:col-span-4">
              <div class="bg-navy-mid border border-gold/15 p-6 h-full">
                <div class="text-gold text-[10px] uppercase tracking-[0.2em] font-bold mb-4">Includes</div>
                <ul class="space-y-2">
                  @foreach ($area['points'] as $pt)
                  <li class="flex items-center gap-3 text-cream/65 text-sm">
                    <span class="w-1.5 h-1.5 bg-gold/60 shrink-0"></span>
                    {{ $pt }}
                  </li>
                  @endforeach
                </ul>
                <a href="{{ $phoneTel }}"
                   class="mt-6 flex items-center justify-center gap-2 bg-urgent hover:bg-urgent-dark text-white text-[11px] uppercase tracking-[0.15em] font-bold py-3 transition-colors w-full">
                  Call Now — Free Consult
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
