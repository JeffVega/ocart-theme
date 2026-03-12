{{-- FAQ --}}
@php
$faqs = [
  [
    'category' => 'After an Arrest',
    'items' => [
      [
        'q' => 'What should I do immediately after being arrested?',
        'a' => "Stay calm and do not resist. Under the <a href=\"https://constitution.congress.gov/constitution/amendment-5/\" target=\"_blank\" rel=\"noopener\" class=\"text-gold underline underline-offset-2 hover:text-gold-light\">Fifth Amendment</a> and <a href=\"https://constitution.congress.gov/constitution/amendment-6/\" target=\"_blank\" rel=\"noopener\" class=\"text-gold underline underline-offset-2 hover:text-gold-light\">Sixth Amendment</a> to the U.S. Constitution, you have the right to remain silent and the right to an attorney. Invoke both clearly: <em>\"I am invoking my right to remain silent and I want an attorney.\"</em> Do not answer questions, sign anything, or discuss the facts with anyone — including cellmates — until you have spoken with a lawyer. Call OC Arrested at {$phoneDisplay} as soon as you are allowed to use a phone.",
      ],
      [
        'q' => 'Do I have to answer police questions?',
        'a' => 'No. The <a href="https://constitution.congress.gov/constitution/amendment-5/" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Fifth Amendment</a> gives you the right to remain silent to avoid self-incrimination. In <em>Miranda v. Arizona</em> (1966), the U.S. Supreme Court held that law enforcement must inform you of this right before a custodial interrogation — these are the "Miranda rights" you have likely heard of. You are generally required to identify yourself under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=647.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 647(e)</a>, but you have no obligation to answer substantive questions about the alleged incident. Clearly state: <em>"I am exercising my right to remain silent and I want an attorney."</em>',
      ],
      [
        'q' => 'What happens at an arraignment?',
        'a' => 'An arraignment is your first formal court appearance. Under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=825.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 825</a>, you must be brought before a magistrate without unnecessary delay — generally within 48 hours of arrest (excluding weekends and holidays). At the arraignment, the charges are formally read, you enter a plea (typically "not guilty" at this early stage), and bail is addressed. The <a href="https://www.occourts.org/criminal/" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Orange County Superior Court</a> handles arraignments for all OC arrests. Having an attorney present is critical — they can argue for lower bail or release on your own recognizance.',
      ],
      [
        'q' => 'What is bail and how does it work in Orange County?',
        'a' => 'Bail is a monetary guarantee, set by the court, that you will appear at all future hearings. The <a href="https://www.occourts.org/media/pdf/bailschedule.pdf" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Orange County Superior Court Bail Schedule</a> establishes presumptive bail amounts by charge. A judge can raise or lower bail at arraignment based on flight risk, public safety, and other factors under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=1275.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 1275</a>. If you cannot post the full amount, a licensed bail bondsman can post it for a non-refundable premium (typically 10% of the bail amount, regulated by the California Department of Insurance). An attorney can argue for reduced bail or OR release.',
      ],
    ],
  ],
  [
    'category' => 'About Legal Representation',
    'items' => [
      [
        'q' => 'How quickly can I get an attorney after calling OC Arrested?',
        'a' => 'We aim to connect you with a qualified California-licensed criminal defense attorney within 30 minutes of your call, 24 hours a day. For arraignments scheduled the next morning, we work to ensure your attorney is present. The sooner you call, the more time your attorney has to prepare a bail argument and review the facts. All attorneys in our network are members in good standing with the <a href="https://www.calbar.ca.gov/" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">State Bar of California</a>.',
      ],
      [
        'q' => 'Is my consultation really free?',
        'a' => 'Yes. Your initial case evaluation with OC Arrested and your initial consultation with the matched attorney are completely free with no obligation. Attorney fees for ongoing representation vary by case complexity and are discussed transparently at that first consultation. Under <a href="https://www.calbar.ca.gov/Portals/0/documents/rules/Rule_1.5-RRC2-033-RulesRevComm.pdf" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Rule of Professional Conduct 1.5</a>, attorneys are required to communicate fee arrangements clearly and in writing before representation begins.',
      ],
      [
        'q' => 'What is the difference between a public defender and a private attorney?',
        'a' => 'If you cannot afford an attorney, the court must appoint one for you under the <a href="https://constitution.congress.gov/constitution/amendment-6/" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Sixth Amendment</a> — this is the public defender\'s office. Public defenders are licensed, qualified attorneys. However, the <a href="https://www.aclu.org/report/tale-two-systems-cost-representation-and-good-punishment-work-us-criminal-courts" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">ACLU</a> and <a href="https://www.brennancenter.org/our-work/research-reports/right-counsel-critical-issue-our-justice-system" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Brennan Center for Justice</a> have documented that public defenders routinely carry excessive caseloads that limit per-case attention. Private criminal defense attorneys generally have smaller caseloads, more investigative resources, and often deeper specialization in specific charge types. In serious cases, this difference in available time and resources can significantly affect outcomes.',
      ],
      [
        'q' => 'Do you offer Spanish-language services?',
        'a' => 'Yes. We have bilingual staff and can connect you with Spanish-speaking criminal defense attorneys. Under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=177.5.&lawCode=CCP" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Code of Civil Procedure § 177.5</a> and the California Courts\' <a href="https://www.courts.ca.gov/programs-languageaccess.htm" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Language Access Program</a>, interpreters are available in court proceedings — but having an attorney who speaks your language from the start provides a critical advantage in communication and strategy.',
      ],
    ],
  ],
  [
    'category' => 'About Your Case',
    'items' => [
      [
        'q' => 'Can charges be dismissed or reduced?',
        'a' => 'Yes, in many cases. Under the <a href="https://constitution.congress.gov/constitution/amendment-4/" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Fourth Amendment</a>, evidence obtained through an unlawful search or seizure can be suppressed — and a motion to suppress can result in charges being reduced or dismissed entirely. Charges can also be dismissed for insufficient evidence, witness credibility issues, or prosecutorial discretion. Reductions are common through negotiation: for example, a felony DUI can sometimes be reduced to a misdemeanor under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=17.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 17(b)</a>.',
      ],
      [
        'q' => 'Will I go to jail?',
        'a' => 'Not necessarily. Many cases are resolved without incarceration. California offers alternatives including probation, diversion programs under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=1001.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">Penal Code § 1001</a> et seq., community service, fines, and plea agreements. The likelihood of incarceration depends on the charges, your criminal history, and the effectiveness of your defense. This is one of the strongest reasons to have an attorney involved as early as possible — decisions made in the first 24–48 hours can significantly affect your options.',
      ],
      [
        'q' => 'How long will my case take?',
        'a' => 'Timelines vary. Under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=1382.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 1382</a> (the "speedy trial" statute), misdemeanor cases must generally go to trial within 30–45 days of arraignment if you do not waive time; felony cases within 60 days. In practice, most cases settle or are dismissed before trial — a straightforward misdemeanor may resolve in a few months, while a felony case that goes to trial can take 6–18 months or longer. An attorney can often accelerate resolution through negotiation while preserving your right to trial if necessary.',
      ],
      [
        'q' => 'Can I get my record expunged after a conviction?',
        'a' => 'In many cases, yes. <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=1203.4.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">California Penal Code § 1203.4</a> allows most misdemeanor and certain felony convictions to be dismissed (expunged) once you have completed probation and all conditions of your sentence. An expungement does not erase the conviction from your record entirely, but it permits you to legally state you were not convicted for most private employment purposes. Additional relief may be available under <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=17.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">PC § 17(b)</a> (felony reduction to misdemeanor) or <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=4852.01.&lawCode=PEN" target="_blank" rel="noopener" class="text-gold underline underline-offset-2 hover:text-gold-light">PC § 4852.01</a> (Certificate of Rehabilitation). An attorney can assess your specific eligibility.',
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
            <p class="text-cream/65 text-sm leading-relaxed pb-6">{!! $faq['a'] !!}</p>
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
        <a href="{{ $phoneTel }}"
           class="inline-flex items-center justify-center gap-2 bg-urgent hover:bg-urgent-dark text-white px-8 py-4 font-bold text-sm uppercase tracking-widest transition-colors">
          <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          Call {{ $phoneDisplay }}
        </a>
        <a href="{{ home_url('/contact') }}"
           class="inline-flex items-center justify-center border border-gold text-gold hover:bg-gold hover:text-navy px-8 py-4 font-bold text-sm uppercase tracking-widest transition-all duration-200">
          Send a Message
        </a>
      </div>
    </div>

  </div>
</section>
