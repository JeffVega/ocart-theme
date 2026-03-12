{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="relative bg-navy pt-36 pb-20 overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_70%_at_80%_20%,_#162852_0%,_transparent_60%)]"></div>
  <div class="absolute left-0 inset-y-0 w-[3px] bg-gradient-to-b from-transparent via-gold to-transparent opacity-40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-4">Have Questions?</div>
    <h1 class="font-display text-6xl lg:text-8xl text-cream font-bold leading-none mb-6">
      Frequently<br/><span class="text-gold italic">Asked Questions</span>
    </h1>
    <p class="text-cream/60 text-lg max-w-lg leading-relaxed">
      Honest answers about what happens after an arrest in Orange County.
    </p>
  </div>
</section>


{{-- FAQ --}}
@php
$faqs = [
  [
    'category' => 'After an Arrest',
    'items' => [
      [
        'q' => 'What should I do immediately after being arrested?',
        'a' => 'Stay calm and say as little as possible. You have the right to remain silent — use it. Politely state "I am invoking my right to remain silent and I want an attorney." Then call OC Arrested at (714) 555-0000 as soon as you are allowed to make a phone call. Do not discuss the details of your case with cellmates, friends, or family until you have spoken with a lawyer.',
      ],
      [
        'q' => 'Do I have to answer police questions?',
        'a' => 'No. You have a constitutional right to remain silent under the Fifth Amendment. You should provide your name and basic identification when required by law, but you are not obligated to answer any substantive questions about the alleged incident. Politely but clearly state that you wish to speak with an attorney before answering any questions.',
      ],
      [
        'q' => 'What happens at an arraignment?',
        'a' => 'An arraignment is your first formal court appearance, usually within 24–72 hours of arrest. At this hearing, the charges against you are formally read and you enter a plea (typically "not guilty" at this stage). Bail is also addressed at the arraignment. Having an attorney present at this stage is critical — they can argue for lower bail or release on your own recognizance.',
      ],
      [
        'q' => 'What is bail and how does it work in Orange County?',
        'a' => 'Bail is money deposited with the court as a guarantee that you will appear at all scheduled hearings. In Orange County, bail amounts are set according to a bail schedule based on the charges. A judge can raise or lower bail at the arraignment. If you cannot afford bail, a bail bondsman can post it for a non-refundable fee (typically 10%). Your attorney can argue for reduced bail or release on your own recognizance (OR release).',
      ],
    ],
  ],
  [
    'category' => 'About Legal Representation',
    'items' => [
      [
        'q' => 'How quickly can I get an attorney after calling OC Arrested?',
        'a' => 'We aim to connect you with a qualified attorney within 30 minutes of your call, 24 hours a day. For arraignments the next morning, we work to ensure your attorney is present. The sooner you call, the more time your attorney has to prepare.',
      ],
      [
        'q' => 'Is my consultation really free?',
        'a' => 'Yes. Your initial case evaluation with us and your initial consultation with the matched attorney are completely free with no obligation. Attorney fees for ongoing representation vary by case complexity and are discussed transparently during that first consultation.',
      ],
      [
        'q' => 'What is the difference between a public defender and a private attorney?',
        'a' => 'Public defenders are qualified attorneys, but they typically carry very heavy caseloads that limit the time they can devote to each case. Private criminal defense attorneys generally have smaller caseloads, more time to investigate your case, and often more specialized experience in specific charge types. In a serious case, this difference in attention can significantly affect outcomes.',
      ],
      [
        'q' => 'Do you offer Spanish-language services?',
        'a' => 'Yes. We have fully bilingual staff and can connect you with Spanish-speaking attorneys. We serve Orange County\'s entire community, and language should never be a barrier to getting quality legal help.',
      ],
    ],
  ],
  [
    'category' => 'About Your Case',
    'items' => [
      [
        'q' => 'Can charges be dismissed or reduced?',
        'a' => 'Yes, in many cases. Charges can be dismissed due to lack of evidence, violations of your constitutional rights (such as an unlawful stop or illegal search), witness issues, or prosecutorial discretion. Charges can be reduced through negotiation — for example, a felony DUI can sometimes be reduced to a misdemeanor or wet-reckless charge. An experienced attorney evaluates every angle.',
      ],
      [
        'q' => 'Will I go to jail?',
        'a' => 'Not necessarily. Many cases are resolved without incarceration through probation, diversion programs, community service, fines, or plea agreements. The likelihood of jail time depends heavily on the charges, your prior record, and the quality of your legal defense. This is one of the strongest reasons to have an attorney as early as possible.',
      ],
      [
        'q' => 'How long will my case take?',
        'a' => 'It varies significantly. A straightforward misdemeanor might resolve in a few months. Felony cases can take 6–18 months or longer if they go to trial. An experienced attorney can often accelerate resolution through effective negotiation, but will also fight as long as necessary to protect your interests.',
      ],
      [
        'q' => 'Can I get my record expunged after a conviction?',
        'a' => 'In many cases, yes. Under California Penal Code 1203.4, most misdemeanor and some felony convictions can be expunged after you complete probation and satisfy all conditions of your sentence. Expungement doesn\'t erase the record entirely, but it allows you to legally say you were not convicted for most employment purposes. An attorney can assess your eligibility.',
      ],
    ],
  ],
];
@endphp

<section class="bg-navy-mid py-24">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">

    @foreach ($faqs as $group)
    <div class="mb-14">
      <div class="flex items-center gap-4 mb-8">
        <div class="w-6 h-[2px] bg-gold"></div>
        <h2 class="font-display text-2xl text-gold font-bold uppercase tracking-[0.1em]">{{ $group['category'] }}</h2>
      </div>

      <div class="space-y-2">
        @foreach ($group['items'] as $faq)
        <div class="faq-item bg-navy border border-gold/20 hover:border-gold/35 transition-colors">
          <button class="faq-trigger w-full text-left px-7 py-5 flex items-center justify-between gap-4 focus:outline-none group">
            <span class="font-display text-xl text-cream font-bold group-hover:text-gold transition-colors leading-snug">
              {{ $faq['q'] }}
            </span>
            <span class="faq-icon text-gold shrink-0 w-6 h-6 flex items-center justify-center border border-gold/40 group-hover:border-gold transition-colors">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 5v14M5 12h14"/>
              </svg>
            </span>
          </button>
          <div class="faq-answer px-7">
            <p class="text-cream/65 text-sm leading-relaxed pb-6">{{ $faq['a'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endforeach

    {{-- Still have questions? --}}
    <div class="mt-8 bg-navy border border-gold/30 p-8 text-center">
      <div class="text-gold text-[11px] uppercase tracking-[0.2em] font-bold mb-3">Still Have Questions?</div>
      <h3 class="font-display text-3xl text-cream font-bold mb-4">Talk to a Real Person</h3>
      <p class="text-cream/55 text-sm max-w-sm mx-auto mb-6">
        Our team can answer your specific questions and connect you with an attorney — at no cost.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="tel:+17145550000"
           class="inline-flex items-center justify-center gap-2 bg-urgent hover:bg-urgent-dark text-white px-8 py-4 font-bold text-sm uppercase tracking-widest transition-colors">
          <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          Call (714) 555-0000
        </a>
        <a href="{{ home_url('/contact') }}"
           class="inline-flex items-center justify-center border border-gold text-gold hover:bg-gold hover:text-navy px-8 py-4 font-bold text-sm uppercase tracking-widest transition-all duration-200">
          Send a Message
        </a>
      </div>
    </div>

  </div>
</section>

@endsection
