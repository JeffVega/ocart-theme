{{--
  Template Name: Practice Area
--}}

@extends('layouts.app')

@section('content')
@php
$practiceData = [
  'dui' => [
    'id'       => 'dui',
    'badge'    => 'Traffic & DUI Defense',
    'headline' => 'DUI / DWI',
    'italic'   => 'Defense',
    'tagline'  => 'A DUI arrest in Orange County is not the end of the road. With the right defense, many cases are reduced or dismissed entirely.',
    'category' => 'Traffic Offense',
    'stats' => [
      ['value' => '10',   'unit' => 'days',   'label' => 'to request a DMV hearing before automatic suspension'],
      ['value' => '.08%', 'unit' => 'BAC',    'label' => 'legal limit — but charges can be filed below this threshold'],
      ['value' => '48',   'unit' => 'hrs',    'label' => 'average time for our attorneys to begin on your case'],
    ],
    'overview' => [
      'intro' => 'Driving Under the Influence (DUI) under California Vehicle Code §23152 is one of the most prosecuted offenses in Orange County. What many people do not realize is that an arrest triggers two entirely separate proceedings: the criminal case in court, and an administrative DMV hearing for your driving privileges — each with their own deadlines and rules of evidence.',
      'facts' => [
        ['icon' => '⚖', 'label' => 'Two Separate Cases',       'detail' => 'A DUI arrest triggers both a criminal court case AND a separate DMV Administrative Per Se (APS) hearing. Losing one does not mean losing both.'],
        ['icon' => '⏱', 'label' => 'Critical 10-Day Window',   'detail' => 'You have exactly 10 days from the arrest date to request a DMV hearing. Miss this window and your license is automatically suspended — no hearing, no appeal.'],
        ['icon' => '🔬', 'label' => 'Evidence Is Challengeable','detail' => 'Breathalyzer calibration, blood draw procedures, field sobriety test administration, and the legality of the traffic stop can all be challenged.'],
        ['icon' => '🛡', 'label' => 'First Offense Options',   'detail' => 'Many first-time DUI defendants qualify for reduced charges, informal probation, or diversion programs — no jail time required.'],
      ],
    ],
    'penalties' => [
      'intro' => 'California DUI penalties escalate sharply with each prior offense within 10 years and with aggravating factors such as a BAC ≥ .15%, speeding, accidents, or a minor passenger in the vehicle.',
      'tiers' => [
        [
          'label'  => '1st Offense — Misdemeanor',
          'color'  => 'moderate',
          'items'  => ['$390–$1,000 base fine (up to ~$3,600 with assessments)', '3–5 years informal probation', 'Up to 6 months county jail (often suspended)', '6-month license suspension or restricted license', '3–9 month DUI school', 'Possible Ignition Interlock Device (IID)'],
        ],
        [
          'label'  => '2nd Offense — Misdemeanor',
          'color'  => 'high',
          'items'  => ['$390–$1,000 base fine', '96 hours – 1 year in county jail', '2-year license suspension', '18–30 month DUI school', 'Mandatory IID for 1 year', 'Possible vehicle impoundment'],
        ],
        [
          'label'  => 'Felony DUI — 3rd+, Injury, or Death',
          'color'  => 'critical',
          'items'  => ['16 months – 3 years in California state prison', 'Potential "Strike" under Three Strikes Law', '3–10 year license revocation', 'Habitual Traffic Offender (HTO) designation', 'Restitution to victims', 'Felony conviction — permanent record'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Challenge the Traffic Stop',          'body' => 'The Fourth Amendment requires reasonable articulable suspicion to stop your vehicle. If the stop was unlawful, all evidence collected afterward — including all BAC results — may be suppressed under the exclusionary rule.'],
      ['num' => '02', 'title' => 'Breathalyzer Calibration Records',   'body' => 'Breathalyzer devices must be calibrated and maintained per Title 17, California Code of Regulations. We subpoena calibration logs and maintenance records to identify errors that invalidate test results.'],
      ['num' => '03', 'title' => 'Field Sobriety Test Flaws',          'body' => 'Standardized Field Sobriety Tests must follow NHTSA protocols exactly. Medical conditions, footwear, road surface, and lighting all affect performance — officer deviations are powerful impeachment material.'],
      ['num' => '04', 'title' => 'Rising Blood Alcohol Defense',        'body' => 'Alcohol continues to absorb into the bloodstream after you stop drinking. Your BAC at the time of testing may have been higher than when you were actually driving — expert testimony can establish this.'],
      ['num' => '05', 'title' => 'Medical Conditions & False Positives','body' => 'GERD, acid reflux, diabetes, and ketogenic diets can cause falsely elevated breathalyzer readings. We document relevant medical history and retain expert witnesses to explain the science to the jury.'],
      ['num' => '06', 'title' => 'DMV Hearing Defense',                 'body' => 'The DMV Administrative Per Se hearing is entirely separate from the criminal case. Winning at the DMV preserves your driving privileges — and an attorney can cross-examine the arresting officer under oath.'],
    ],
    'faqs' => [
      ['q' => 'Will I lose my license after a DUI arrest?',          'a' => 'Not automatically. You have 10 days from your arrest to request a DMV Administrative Per Se (APS) hearing. If you request it in time, your license is not suspended until after the hearing. An attorney can request this on your behalf and, in many cases, preserve your driving privileges throughout the process. Source: California DMV (dmv.ca.gov).'],
      ['q' => 'Can a DUI charge be reduced or dismissed?',           'a' => 'Yes. A DUI can be reduced to a "wet reckless" (VC 23103/23103.5) — particularly for first-time offenders with borderline BAC levels. Cases can also be dismissed entirely if evidence is suppressed, the stop was unlawful, or testing procedures were flawed.'],
      ['q' => 'Can a California DUI be expunged?',                   'a' => 'Yes. Under Penal Code §1203.4, most DUI convictions can be expunged after completing probation. This dismisses the conviction for most private employment purposes — though it does not remove the DUI from your DMV record for 10 years. Source: California Legislative Information (leginfo.legislature.ca.gov).'],
      ['q' => 'What happens if I refuse the breathalyzer?',          'a' => 'California\'s implied consent law (VC §23612) means that by driving you consent to chemical testing after a lawful arrest. Refusing results in an automatic 1-year license suspension independent of any criminal outcome, and can be used as evidence of consciousness of guilt at trial.'],
      ['q' => 'How long does a DUI stay on my record?',              'a' => 'A DUI conviction stays on your California DMV record for 10 years and counts as a prior offense for enhanced penalties during that window. On your criminal record, it remains indefinitely unless expunged under PC §1203.4.'],
    ],
    'related' => ['drug-crimes', 'domestic-violence', 'expungement'],
  ],

  'drug-crimes' => [
    'id'       => 'drug-crimes',
    'badge'    => 'Drug Offense Defense',
    'headline' => 'Drug',
    'italic'   => 'Crimes',
    'tagline'  => 'From misdemeanor possession to federal trafficking, every drug case turns on the evidence — and evidence can be challenged.',
    'category' => 'Drug Offense',
    'stats' => [
      ['value' => '4th',      'unit' => 'Amend.', 'label' => 'Most drug cases won on illegal search & seizure challenges'],
      ['value' => 'Prop 47',  'unit' => '2014',   'label' => 'Reduced many felony drug possessions to misdemeanors'],
      ['value' => '25+',      'unit' => 'yrs',    'label' => 'Maximum federal penalty for large-scale trafficking offenses'],
    ],
    'overview' => [
      'intro' => 'California drug charges span from simple personal-use possession (often a misdemeanor under Prop 47) to large-scale manufacturing and trafficking with federal implications. The most powerful defense tool in most drug cases is the Fourth Amendment — if evidence was seized illegally, it cannot be used against you.',
      'facts' => [
        ['icon' => '🔍', 'label' => 'Search & Seizure Is Everything', 'detail' => 'Without a valid warrant, consent, or recognized exception, evidence from illegal searches can be suppressed — effectively ending the prosecution\'s case.'],
        ['icon' => '⚖', 'label' => 'Prop 47 Changed the Landscape',  'detail' => 'Since 2014, simple possession of most controlled substances is a misdemeanor in California, not a felony — and prior felony convictions can be retroactively resentenced.'],
        ['icon' => '🛡', 'label' => 'Diversion Programs Available',   'detail' => 'PC §1000 and Prop 36 provide drug diversion and treatment alternatives to incarceration for many first-time and non-violent offenders.'],
        ['icon' => '📋', 'label' => 'Intent Determines the Charge',   'detail' => 'Possession for personal use vs. possession for sale carries drastically different penalties. The prosecution must prove intent — we challenge the evidence used to establish it.'],
      ],
    ],
    'penalties' => [
      'intro' => 'Drug penalties depend on the substance, quantity, prior record, and whether possession, sale, transportation, or manufacturing is alleged.',
      'tiers' => [
        [
          'label'  => 'Simple Possession — Misdemeanor (Prop 47)',
          'color'  => 'moderate',
          'items'  => ['Up to 1 year in county jail', 'Up to $1,000 fine', 'Informal probation', 'Drug diversion program eligibility (PC §1000)', 'Expungement eligible after probation'],
        ],
        [
          'label'  => 'Possession for Sale / Distribution',
          'color'  => 'high',
          'items'  => ['2–4 years in state prison (base term)', 'Enhanced penalties for sale near a school', 'Felony conviction — loss of voting and firearm rights', 'Immigration consequences for non-citizens', 'Federal charges if trafficking crosses state lines'],
        ],
        [
          'label'  => 'Manufacturing / Federal Trafficking',
          'color'  => 'critical',
          'items'  => ['State prison: 3–7 years (manufacturing)', 'Federal mandatory minimums: 5–40 years', 'Asset forfeiture', 'Federal felony — permanent immigration bar', 'RICO charges if organized crime nexus'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Illegal Search & Seizure',       'body' => 'The Fourth Amendment prohibits unreasonable searches. We scrutinize every search — warrant validity, consent issues, vehicle searches, and pat-downs — and move to suppress any evidence obtained unlawfully.'],
      ['num' => '02', 'title' => 'Lack of Actual Possession',      'body' => 'Constructive possession requires knowing control. We challenge whether you knew contraband was present, whether it was accessible to you, and whether someone else had equal or greater access.'],
      ['num' => '03', 'title' => 'Chain of Custody Challenges',    'body' => 'Evidence must be properly preserved from seizure through lab analysis. Documentation gaps, improper storage, and cross-contamination are real vulnerabilities in drug prosecutions.'],
      ['num' => '04', 'title' => 'Diversion & Treatment Programs', 'body' => 'Under PC §1000 and Prop 36, eligible defendants can complete a treatment program in lieu of prosecution. Successful completion results in dismissal with no criminal conviction on record.'],
      ['num' => '05', 'title' => 'Entrapment Defense',             'body' => 'If law enforcement induced you to commit a drug offense you would not otherwise have committed, entrapment is a complete defense. Undercover operations and informant arrangements are scrutinized carefully.'],
      ['num' => '06', 'title' => 'Prop 47 Resentencing',          'body' => 'If previously convicted of a felony drug offense that would now be a misdemeanor under Prop 47, you may petition for resentencing — reducing your conviction and restoring certain rights.'],
    ],
    'faqs' => [
      ['q' => 'Is marijuana possession still illegal in California?',             'a' => 'Adult personal possession of up to 28.5 grams of cannabis is legal under Prop 64. However, possession of larger quantities, possession for sale, or unlicensed distribution remains criminal. Possession on federal property is still a federal offense regardless of state law.'],
      ['q' => 'What is a PC §1000 diversion?',                                   'a' => 'Penal Code §1000 allows eligible defendants charged with simple drug possession to complete a drug education or treatment program. Upon successful completion, charges are dismissed — no conviction on record. Eligibility requires no prior drug-related convictions. Source: California Legislative Information.'],
      ['q' => 'Can my car be searched during a traffic stop?',                   'a' => 'Officers can search without a warrant only if they have probable cause, consent, or a recognized exception applies. Smelling marijuana alone may no longer constitute probable cause in California under Prop 64 — this area is actively litigated.'],
      ['q' => 'What is the difference between possession and possession for sale?','a' => 'Courts look at circumstantial evidence: quantity of drugs, presence of scales and baggies, large amounts of cash, text messages, and location. Challenging this intent evidence is a primary defense strategy.'],
    ],
    'related' => ['dui', 'assault', 'expungement'],
  ],

  'assault' => [
    'id'       => 'assault',
    'badge'    => 'Violent Offense Defense',
    'headline' => 'Assault &',
    'italic'   => 'Battery',
    'tagline'  => 'Assault charges often stem from misunderstandings, self-defense, or exaggerated claims. Context and intent are everything.',
    'category' => 'Violent Offense',
    'stats' => [
      ['value' => 'PC 240', 'unit' => '',    'label' => 'Simple assault — attempt or threat of harmful contact, no contact required'],
      ['value' => 'PC 243', 'unit' => '',    'label' => 'Battery — the actual willful and unlawful use of force on another'],
      ['value' => '4 yrs',  'unit' => 'max', 'label' => 'state prison for assault with a deadly weapon (PC 245)'],
    ],
    'overview' => [
      'intro' => 'Assault (PC §240) and battery (PC §243) are distinct but often charged together. Assault is the unlawful attempt to commit a violent injury — no physical contact required. Battery is the actual willful, unlawful touching. Both range from misdemeanors to serious felonies depending on circumstances, the alleged victim, and the weapon involved.',
      'facts' => [
        ['icon' => '🎯', 'label' => 'No Contact Required for Assault',      'detail' => 'You can be charged with assault even if no one was touched. The crime is the attempt and present ability to commit harmful contact — intent matters more than outcome.'],
        ['icon' => '⚖', 'label' => 'Self-Defense Is a Complete Defense',   'detail' => 'If you reasonably believed you were in imminent danger and used no more force than necessary, self-defense is a complete defense to assault and battery charges.'],
        ['icon' => '📋', 'label' => 'Enhanced Penalties for Certain Victims','detail' => 'Battery on a peace officer, emergency responder, or elder converts a misdemeanor to a felony with significantly enhanced penalties.'],
        ['icon' => '🛡', 'label' => 'Witness Credibility Is Critical',      'detail' => 'Many assault cases come down to conflicting accounts. We investigate the scene, interview witnesses, and secure surveillance footage to build the complete picture.'],
      ],
    ],
    'penalties' => [
      'intro' => 'California assault and battery penalties vary widely based on severity, whether a weapon was involved, who the alleged victim is, and any prior convictions.',
      'tiers' => [
        [
          'label'  => 'Simple Assault / Battery — Misdemeanor',
          'color'  => 'moderate',
          'items'  => ['Up to 6 months in county jail', 'Up to $2,000 fine', 'Informal probation', 'Mandatory anger management or counseling', 'Possible restraining order'],
        ],
        [
          'label'  => 'Assault with a Deadly Weapon — Wobbler (PC 245)',
          'color'  => 'high',
          'items'  => ['As misdemeanor: up to 1 year in county jail', 'As felony: 2, 3, or 4 years in state prison', 'Strike under California Three Strikes Law', 'Permanent firearm prohibition if convicted as felony', 'Immigration consequences for non-citizens'],
        ],
        [
          'label'  => 'Great Bodily Injury / Battery on Officer — Felony',
          'color'  => 'critical',
          'items'  => ['GBI enhancement: +3–6 years to base sentence', 'Battery on peace officer: 16 months – 3 years state prison', 'Strike offense — doubled sentences for prior strikes', 'Permanent loss of firearm rights', 'Potential civil liability to victim'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Self-Defense / Defense of Others',     'body' => 'California law recognizes the right to defend yourself or others from imminent bodily harm. The force must be proportional and reasonable. We establish the threat you faced and show your response was legally justified.'],
      ['num' => '02', 'title' => 'Lack of Intent',                       'body' => 'Assault and battery are intentional acts. If contact was accidental or you lacked the willful intent required by statute, the prosecution cannot prove its case — even if someone was hurt.'],
      ['num' => '03', 'title' => 'Consent',                              'body' => 'In certain contexts (sports, mutual combat), consent to physical contact is a valid defense. We examine the context and relationship between the parties carefully.'],
      ['num' => '04', 'title' => 'False Accusations & Witness Credibility','body' => 'Assault charges frequently arise from disputed accounts in arguments or bar fights. We investigate the alleged victim\'s credibility, prior accusations, and any motive to fabricate.'],
      ['num' => '05', 'title' => 'Insufficient Evidence',                'body' => 'Without corroborating evidence — surveillance, medical records, independent witnesses — the prosecution may lack the proof to establish guilt beyond a reasonable doubt.'],
      ['num' => '06', 'title' => 'Mutual Combat Context',                'body' => 'Where both parties engaged in a mutual altercation, we present this context to reduce charges or argue proportionality — affecting both the verdict and sentencing.'],
    ],
    'faqs' => [
      ['q' => 'What is the difference between assault and battery in California?', 'a' => 'Under PC §240, assault is the unlawful attempt — with present ability — to commit a violent injury. Under PC §243, battery is the actual willful and unlawful use of force or violence against another person. You can be charged with assault even if no physical contact occurred.'],
      ['q' => 'Can I claim self-defense even if I threw the first punch?',         'a' => 'Generally, if you were the initial aggressor, you cannot claim self-defense unless you clearly withdrew from the confrontation and communicated that withdrawal. However, facts are nuanced — the other person\'s conduct, any weapons, and proportionality of force all matter.'],
      ['q' => 'What happens if the victim does not want to press charges?',        'a' => 'In California, the decision to file charges belongs to the prosecutor, not the alleged victim. Even if the victim recants or refuses to cooperate, the DA can proceed with other evidence. An attorney can help navigate this — but victim non-cooperation does not guarantee dismissal.'],
      ['q' => 'Is assault with a deadly weapon always a felony?',                  'a' => 'PC §245(a)(1) is a "wobbler" — it can be charged as either misdemeanor or felony depending on circumstances and criminal history. An experienced attorney can often negotiate for misdemeanor treatment, avoiding a Three Strikes mark on your record.'],
    ],
    'related' => ['domestic-violence', 'dui', 'expungement'],
  ],

  'domestic-violence' => [
    'id'       => 'domestic-violence',
    'badge'    => 'Domestic Violence Defense',
    'headline' => 'Domestic',
    'italic'   => 'Violence',
    'tagline'  => 'These charges can be filed on minimal evidence and affect custody, immigration, and employment. The stakes could not be higher.',
    'category' => 'Domestic Offense',
    'stats' => [
      ['value' => 'PC 273.5', 'unit' => '',    'label' => 'Corporal injury on spouse — primary DV felony in California'],
      ['value' => '4 yrs',    'unit' => 'max', 'label' => 'state prison for corporal injury conviction without priors'],
      ['value' => '10 yrs',   'unit' => 'ban', 'label' => 'federal firearm prohibition after any domestic violence conviction'],
    ],
    'overview' => [
      'intro' => 'Domestic violence charges cover a range of offenses between intimate partners, family members, and cohabitants. Prosecutors take these cases extremely seriously — and will often proceed even if the alleged victim does not want charges filed. A conviction can permanently affect child custody, professional licenses, firearm rights, and immigration status.',
      'facts' => [
        ['icon' => '⚖', 'label' => 'Prosecutors Can Proceed Without Victim',  'detail' => 'California DV cases are prosecuted by the state. Even a recanting victim does not stop the case — the DA can use 911 calls, officer observations, photos, and medical records.'],
        ['icon' => '🚫', 'label' => 'Protective Orders Issued Immediately',    'detail' => 'An Emergency Protective Order (EPO) is typically issued at the time of arrest, restricting contact and potentially removing you from your home before any conviction.'],
        ['icon' => '👨‍👧', 'label' => 'Child Custody Impact',                   'detail' => 'A DV conviction creates a rebuttable presumption under Family Code §3044 that granting custody to the convicted party is detrimental to the child.'],
        ['icon' => '🌍', 'label' => 'Immigration Consequences',               'detail' => 'Under federal law, a domestic violence conviction is a deportable offense for non-citizens and results in permanent bars to many immigration benefits.'],
      ],
    ],
    'penalties' => [
      'intro' => 'California domestic violence offenses range from misdemeanors to serious felonies, depending on injury, weapon use, and prior DV convictions within 7 years.',
      'tiers' => [
        [
          'label'  => 'Misdemeanor Domestic Battery (PC 243(e))',
          'color'  => 'moderate',
          'items'  => ['Up to 1 year in county jail', 'Up to $2,000 fine', '3 years informal probation', 'Mandatory 52-week batterer\'s intervention program', 'Restraining order (potentially permanent)', '10-year federal firearm prohibition'],
        ],
        [
          'label'  => 'Felony Corporal Injury on Spouse (PC 273.5)',
          'color'  => 'high',
          'items'  => ['2, 3, or 4 years in state prison', 'Up to $6,000 fine', 'Criminal protective order', 'Loss of firearm rights', 'Deportation risk for non-citizens', 'Mandatory counseling on probation'],
        ],
        [
          'label'  => 'With Prior Conviction or Great Bodily Injury',
          'color'  => 'critical',
          'items'  => ['Up to 5 years in state prison with GBI enhancement', '+3–5 year enhancement for prior DV within 7 years', 'Strike under Three Strikes Law', 'Permanent loss of firearm rights', 'Permanent immigration bar'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'False Accusation Defense',       'body' => 'DV allegations frequently arise during contentious divorce or custody disputes. We investigate the timeline, prior accusations, communications, and financial motivations that may explain a false report.'],
      ['num' => '02', 'title' => 'Self-Defense / Mutual Combat',   'body' => 'If you acted in reasonable self-defense against an attack, you are not guilty of domestic violence. We gather medical records, photos, and witness testimony to establish who was the primary aggressor.'],
      ['num' => '03', 'title' => 'Insufficient Evidence',          'body' => 'Many DV cases rest entirely on the alleged victim\'s testimony. Without corroborating injuries, 911 recordings, or independent witnesses, the prosecution faces a difficult burden beyond a reasonable doubt.'],
      ['num' => '04', 'title' => 'Victim Recantation Strategy',    'body' => 'While recantation does not automatically dismiss the case, it weakens the prosecution significantly. We work with the defense narrative and explore whether victim cooperation can lead to favorable resolution.'],
      ['num' => '05', 'title' => 'Challenging the Protective Order','body' => 'Emergency Protective Orders are issued on minimal evidence. We move immediately to modify or terminate inappropriate EPOs that are disrupting your housing, employment, and family relationships.'],
      ['num' => '06', 'title' => 'Diversion Programs',             'body' => 'Some first-time DV defendants may qualify for a deferred entry of judgment — completing counseling requirements in exchange for a reduced or dismissed charge.'],
    ],
    'faqs' => [
      ['q' => 'Can domestic violence charges be dropped if the victim recants?', 'a' => 'Not automatically. The District Attorney — not the victim — decides whether to pursue charges. A recanting victim weakens the case significantly, but prosecutors can and do proceed using 911 recordings, officer observations, and medical records.'],
      ['q' => 'Does a domestic violence conviction affect child custody?',        'a' => 'Yes. Under California Family Code §3044, there is a rebuttable presumption that awarding custody to a person who committed domestic violence in the past 5 years is detrimental to the child. Source: California Legislative Information (leginfo.legislature.ca.gov).'],
      ['q' => 'Can I own a firearm after a domestic violence conviction?',       'a' => 'No. Under federal law (18 U.S.C. §922(g)(9)), anyone convicted of a domestic violence offense — misdemeanor or felony — is permanently prohibited from possessing firearms. This cannot be removed by state expungement.'],
      ['q' => 'What is an Emergency Protective Order?',                          'a' => 'An EPO is issued by law enforcement at the time of a DV arrest and lasts up to 7 days. It may prohibit contact with the alleged victim or returning to your home. An attorney can move immediately to modify or terminate a disproportionate EPO.'],
    ],
    'related' => ['assault', 'theft', 'expungement'],
  ],

  'theft' => [
    'id'       => 'theft',
    'badge'    => 'Theft Defense',
    'headline' => 'Theft',
    'italic'   => 'Crimes',
    'tagline'  => 'Even a misdemeanor theft conviction can derail employment and housing. We fight to protect your record at every level.',
    'category' => 'Property Crime',
    'stats' => [
      ['value' => '$950',     'unit' => '',    'label' => 'Prop 47 threshold — theft below this is typically a misdemeanor in CA'],
      ['value' => 'PC 459.5', 'unit' => '',    'label' => 'Shoplifting statute, separate from burglary charges post-Prop 47'],
      ['value' => '3 yrs',    'unit' => 'max', 'label' => 'state prison for grand theft as a felony under PC 487'],
    ],
    'overview' => [
      'intro' => 'Theft offenses span a wide spectrum: petty theft, shoplifting, grand theft, embezzlement, and identity theft — each carrying different penalties and defenses. Under Proposition 47, most theft of property worth under $950 is now a misdemeanor, significantly changing the charging landscape for shoplifting and retail theft cases in Orange County.',
      'facts' => [
        ['icon' => '💰', 'label' => 'Value Determines the Charge',    'detail' => 'The $950 threshold under Prop 47 determines petty theft (misdemeanor) vs. grand theft (felony). The prosecution must prove value — and that proof can be challenged.'],
        ['icon' => '⚖', 'label' => 'Shoplifting vs. Burglary',       'detail' => 'Post-Prop 47, entering a store during business hours to steal under $950 is shoplifting (PC §459.5, misdemeanor) — not commercial burglary. This distinction matters enormously for your record.'],
        ['icon' => '📋', 'label' => 'Priors Can Elevate Charges',     'detail' => 'Prior theft convictions — especially under PC §666 (petty theft with a prior) — can elevate what would otherwise be a misdemeanor to a felony charge.'],
        ['icon' => '🛡', 'label' => 'Diversion Often Available',      'detail' => 'Many first-time theft defendants are eligible for civil compromise, diversion, or informal resolution that results in no criminal conviction on your record.'],
      ],
    ],
    'penalties' => [
      'intro' => 'California theft penalties depend on the value of property taken, method of theft, whether it is a first or subsequent offense, and any enhancements for weapons or vulnerable victims.',
      'tiers' => [
        [
          'label'  => 'Petty Theft / Shoplifting — Misdemeanor',
          'color'  => 'moderate',
          'items'  => ['Up to 6 months in county jail', 'Up to $1,000 fine', 'Informal probation', 'Civil demand letter from retailer', 'Permanent criminal record if convicted'],
        ],
        [
          'label'  => 'Grand Theft — Wobbler (PC 487)',
          'color'  => 'high',
          'items'  => ['As misdemeanor: up to 1 year in county jail', 'As felony: 16 months, 2, or 3 years state prison', 'Fine up to $10,000', 'Restitution to victim', 'Professional license consequences'],
        ],
        [
          'label'  => 'Grand Theft + Enhancements or Robbery',
          'color'  => 'critical',
          'items'  => ['Robbery (PC §211): 2–9 years state prison', 'First degree robbery: 3–9 years', 'Firearms enhancement: +10 years', 'Strike under Three Strikes Law', 'Great bodily injury: +3–6 year enhancement'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Lack of Intent to Steal',      'body' => 'Theft requires the specific intent to permanently deprive the owner of their property. If you mistakenly took something, intended to return it, or had a good-faith belief of ownership, no crime was committed.'],
      ['num' => '02', 'title' => 'Challenging Property Valuation','body' => 'The prosecution must prove value beyond a reasonable doubt. We challenge retail pricing, fair market value determinations, and whether Prop 47\'s $950 threshold applies to reduce the charge.'],
      ['num' => '03', 'title' => 'Claim of Right Defense',        'body' => 'If you honestly believed the property was yours or that you had a right to it — even if mistaken — you lack the criminal intent required for theft.'],
      ['num' => '04', 'title' => 'Civil Compromise',              'body' => 'For misdemeanor theft, California law allows a civil compromise where the defendant makes restitution in exchange for dismissal of criminal charges — particularly effective for first-time retail theft.'],
      ['num' => '05', 'title' => 'Prop 47 Resentencing',          'body' => 'If previously convicted of a felony theft offense that now qualifies as a misdemeanor under Prop 47, you may petition for resentencing — reducing your conviction and restoring certain rights.'],
    ],
    'faqs' => [
      ['q' => 'Is shoplifting under $950 still a crime in California?', 'a' => 'Yes, shoplifting under $950 is a misdemeanor under PC §459.5 as amended by Prop 47. While it is no longer a felony, a conviction still creates a permanent criminal record affecting employment, housing, and professional licenses. First-time offenders often qualify for diversion.'],
      ['q' => 'Can I get a theft conviction expunged?',                'a' => 'Yes. Under PC §1203.4, most misdemeanor and felony theft convictions can be expunged after completing probation. The expunged conviction is dismissed for most private employment purposes. Source: California Legislative Information.'],
      ['q' => 'What is the difference between theft and robbery?',      'a' => 'Theft takes property without the owner\'s knowledge or consent. Robbery (PC §211) involves taking property directly from a person using force or fear — it is a strike felony. Even grabbing a purse from someone\'s hands can constitute robbery.'],
    ],
    'related' => ['robbery', 'drug-crimes', 'expungement'],
  ],

  'robbery' => [
    'id'       => 'robbery',
    'badge'    => 'Serious Felony Defense',
    'headline' => 'Robbery &',
    'italic'   => 'Burglary',
    'tagline'  => 'Robbery and burglary are strike offenses with state prison consequences. The strength of the evidence is everything.',
    'category' => 'Property & Violent Crime',
    'stats' => [
      ['value' => '9 yrs',  'unit' => 'max',   'label' => 'state prison for first degree robbery in California (PC 211)'],
      ['value' => 'Strike', 'unit' => '',       'label' => 'Robbery is a Three Strikes offense — a prior can double any future sentence'],
      ['value' => '6 yrs',  'unit' => 'max',   'label' => 'state prison for first degree residential burglary (PC 460)'],
    ],
    'overview' => [
      'intro' => 'Robbery (PC §211) and burglary (PC §459) are among the most seriously prosecuted offenses in Orange County. Robbery — taking property from a person by force or fear — is a strike offense. Burglary — entering a structure with intent to commit a felony therein — ranges from misdemeanor commercial burglary to first degree residential burglary, also a strike.',
      'facts' => [
        ['icon' => '⚖', 'label' => 'Both Can Be Strike Offenses',       'detail' => 'Robbery and first degree burglary are both strikes under California\'s Three Strikes Law. A second strike doubles the sentence; a third mandates 25 to life.'],
        ['icon' => '🎯', 'label' => 'Intent at Time of Entry Governs',  'detail' => 'Burglary requires criminal intent at the moment of entry — not after. If you entered lawfully and formed intent later, burglary may not apply.'],
        ['icon' => '🔍', 'label' => 'Eyewitness ID Is Unreliable',      'detail' => 'Many robbery cases hinge on eyewitness identification — among the least reliable forms of evidence. We scrutinize lineup procedures, lighting, and cross-racial identifications.'],
        ['icon' => '📋', 'label' => 'Degrees Matter Enormously',        'detail' => 'First degree vs. second degree robbery and burglary carry very different penalties. Challenging the degree of offense can dramatically change the outcome.'],
      ],
    ],
    'penalties' => [
      'intro' => 'Penalties for robbery and burglary depend on the degree of the offense, whether weapons were used, whether anyone was injured, and any prior strike convictions.',
      'tiers' => [
        [
          'label'  => '2nd Degree Robbery / Commercial Burglary',
          'color'  => 'moderate',
          'items'  => ['2nd degree robbery: 2, 3, or 5 years state prison', 'Commercial burglary: 16 months, 2, or 3 years (felony)', 'Strike offense (robbery only)', 'Restitution to victims', 'Parole period after release'],
        ],
        [
          'label'  => '1st Degree Robbery / Residential Burglary',
          'color'  => 'high',
          'items'  => ['1st degree robbery: 3, 6, or 9 years state prison', 'Residential burglary: 2, 4, or 6 years state prison', 'Both are strike offenses', 'Home invasion robbery: mandatory 6-year minimum', 'Serious and violent felony designation'],
        ],
        [
          'label'  => 'With Firearm or Great Bodily Injury Enhancement',
          'color'  => 'critical',
          'items'  => ['Personal use of firearm: +10 years (mandatory consecutive)', 'Discharge of firearm: +20 years', 'Discharge causing GBI or death: +25 years to life', 'Three Strikes: doubled sentence or 25 to life', 'Career criminal designation possible'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Eyewitness Identification Challenges',  'body' => 'Studies show eyewitness ID is unreliable, particularly under stress. We scrutinize lineup procedures, description discrepancies, estimator variables, and whether the identification was unduly suggestive.'],
      ['num' => '02', 'title' => 'Lack of Force or Fear (Robbery)',       'body' => 'Robbery requires taking property through force or fear. If property was taken without the victim\'s awareness — or if fear was not reasonably induced — the charge may be reduced to theft.'],
      ['num' => '03', 'title' => 'No Intent at Time of Entry (Burglary)', 'body' => 'Burglary requires criminal intent at the moment of entry. We challenge when and how intent formed, and whether the entry was lawful — which can reduce charges from burglary to a lesser offense.'],
      ['num' => '04', 'title' => 'Alibi & Digital Evidence',              'body' => 'We work quickly to secure surveillance footage, cell phone location data, and witness statements that establish you were not present at the scene of the alleged offense.'],
      ['num' => '05', 'title' => 'Romero Motion — Strike Prior Challenges','body' => 'We scrutinize prior strike convictions for accuracy and file Romero motions (People v. Superior Court, 13 Cal.4th 497) asking the court to strike a prior in furtherance of justice, dramatically reducing exposure.'],
    ],
    'faqs' => [
      ['q' => 'What makes a burglary "first degree" in California?', 'a' => 'Under PC §460, first degree burglary is the entry of an inhabited dwelling — a house, apartment, or any building where someone lives. All other burglary is second degree. First degree residential burglary is a strike offense; most second degree burglaries are wobblers.'],
      ['q' => 'Can I be charged with robbery if I used no weapon?',   'a' => 'Yes. Robbery under PC §211 requires only force or fear — not a weapon. Even grabbing property from someone\'s hands, pushing them, or threatening them verbally can constitute robbery. Using a firearm adds mandatory consecutive sentence enhancements.'],
      ['q' => 'What is a Romero motion?',                            'a' => 'A Romero motion asks the court to dismiss a prior strike "in furtherance of justice" under PC §1385. Judges have discretion to strike a prior, particularly for older convictions or where the defendant\'s full background warrants leniency. Source: People v. Superior Court (Romero), 13 Cal.4th 497 (1996).'],
    ],
    'related' => ['assault', 'theft', 'drug-crimes'],
  ],

  'juvenile' => [
    'id'       => 'juvenile',
    'badge'    => 'Juvenile Defense',
    'headline' => 'Juvenile',
    'italic'   => 'Defense',
    'tagline'  => 'A youthful mistake should not define a lifetime. The juvenile system offers pathways that preserve your child\'s future.',
    'category' => 'Juvenile Justice',
    'stats' => [
      ['value' => 'WIC 602',  'unit' => '',    'label' => 'California statute governing juvenile delinquency proceedings'],
      ['value' => 'Age 18',   'unit' => '',    'label' => 'Juvenile court jurisdiction typically ends — though wards may continue to 25'],
      ['value' => 'Sealed',   'unit' => '',    'label' => 'Most juvenile records can be sealed at 18, protecting future opportunities'],
    ],
    'overview' => [
      'intro' => 'California\'s juvenile justice system operates under Welfare and Institutions Code §602 and is fundamentally different from adult criminal court — the focus is rehabilitation over punishment, and many dispositions are designed to keep young people out of the criminal justice pipeline entirely. Early, experienced representation is critical to securing the best possible outcome.',
      'facts' => [
        ['icon' => '🔒', 'label' => 'Different Rules Than Adult Court',     'detail' => 'Juvenile proceedings are generally confidential, use different terminology (petition vs. complaint, disposition vs. sentence), and have their own hearing procedures and rights.'],
        ['icon' => '🎯', 'label' => 'Rehabilitation Is the Goal',           'detail' => 'Unlike adult court, juvenile dispositions prioritize treatment, education, and community reintegration — but serious offenses can still result in secure detention or transfer to adult court.'],
        ['icon' => '🔄', 'label' => 'Transfer to Adult Court Is Possible',  'detail' => 'For serious offenses, prosecutors may seek to try a juvenile as an adult — with vastly more severe consequences. This transfer can and must be contested aggressively.'],
        ['icon' => '🔑', 'label' => 'Records Can Be Sealed',               'detail' => 'Most juvenile records can be sealed at age 18 or 5 years after jurisdiction ends — but proactive steps and proper petitioning are required.'],
      ],
    ],
    'penalties' => [
      'intro' => 'Juvenile "dispositions" range from informal probation to placement in a secure Division of Juvenile Justice (DJJ) facility, depending on severity and prior history.',
      'tiers' => [
        [
          'label'  => 'Informal Probation / Diversion (WIC 654)',
          'color'  => 'moderate',
          'items'  => ['No formal petition filed', 'Counseling, community service, or restitution', 'Supervision by probation officer', 'No formal adjudication on record', 'Available for first-time, minor offenses'],
        ],
        [
          'label'  => 'Formal Probation — Home or Camp Placement',
          'color'  => 'high',
          'items'  => ['Formal adjudication as a ward of the court', 'Probation conditions: curfew, school attendance, counseling', 'Possible placement in probation camp or ranch', 'Record created — though sealable at 18', 'Potential for modification if compliant'],
        ],
        [
          'label'  => 'DJJ Commitment / Adult Court Transfer',
          'color'  => 'critical',
          'items'  => ['Secure confinement in state juvenile facility', 'If tried as adult: adult prison sentence possible', 'Adult criminal record — not automatically sealable', 'Sex offender registration for qualifying offenses', 'Lifelong consequences if convicted as an adult'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'Contesting Transfer to Adult Court',  'body' => 'A fitness hearing (WIC §707) determines whether a juvenile should be tried as an adult. We present evidence of the minor\'s mental state, trauma history, rehabilitation potential, and the nature of the offense to keep the case in juvenile court.'],
      ['num' => '02', 'title' => 'Diversion & Informal Probation',      'body' => 'WIC §654 and §654.2 allow law enforcement and probation to resolve minor offenses informally — without a formal petition. We advocate early for these resolutions to avoid any formal record whatsoever.'],
      ['num' => '03', 'title' => 'Challenging the Evidence',            'body' => 'Juvenile cases carry the same constitutional protections as adult cases — Fourth Amendment rights, Miranda protections, and the right to confront witnesses. Statements by minors without counsel are especially vulnerable to suppression.'],
      ['num' => '04', 'title' => 'Record Sealing (WIC §781)',           'body' => 'Under WIC §781, eligible minors can petition to seal their juvenile records at age 18. Once sealed, records are physically destroyed and legally treated as if they never existed — a clean start.'],
      ['num' => '05', 'title' => 'Trauma-Informed Mitigation',          'body' => 'We work with mental health experts, counselors, and social workers to present a complete picture of the minor\'s background — trauma, learning disabilities, family circumstances — that contextualizes the offense and supports treatment-focused dispositions.'],
    ],
    'faqs' => [
      ['q' => 'Can my child\'s juvenile record be sealed?',         'a' => 'Yes, in most cases. Under WIC §781, a minor can petition to seal their record once they turn 18, or 5 years after the most recent adjudication. Sealing is not available for certain serious offenses. Once sealed, records are destroyed and legally do not exist. Source: California Courts (courts.ca.gov).'],
      ['q' => 'Can a juvenile be tried as an adult in California?', 'a' => 'Yes. The prosecutor can file directly in adult court for certain serious offenses, or a juvenile court judge can transfer the case after a fitness hearing (WIC §707). We contest transfers aggressively, presenting evidence that the juvenile system can adequately address rehabilitation.'],
      ['q' => 'Does my child have Miranda rights?',                 'a' => 'Yes. Minors have the same Fifth Amendment rights as adults, including the right to remain silent and the right to counsel before questioning. However, police may interrogate minors without a parent present — statements made under pressure are often suppressed.'],
    ],
    'related' => ['drug-crimes', 'assault', 'expungement'],
  ],

  'expungement' => [
    'id'       => 'expungement',
    'badge'    => 'Post-Conviction Relief',
    'headline' => 'Expungement',
    'italic'   => '& Record Clearing',
    'tagline'  => 'A past conviction doesn\'t have to follow you forever. California law gives you tools to clear your record and reclaim your opportunities.',
    'category' => 'Post-Conviction Relief',
    'stats' => [
      ['value' => 'PC 1203.4', 'unit' => '',   'label' => 'California statute governing expungement after completing probation'],
      ['value' => 'PC 17(b)',  'unit' => '',   'label' => 'Allows reduction of qualifying wobbler felonies to misdemeanors'],
      ['value' => 'Prop 47',   'unit' => '',   'label' => 'Enables retroactive resentencing of certain felony convictions'],
    ],
    'overview' => [
      'intro' => 'California offers several pathways to clear or reduce the impact of a criminal conviction. Penal Code §1203.4 expungement dismisses your conviction after probation — helping with most private employment background checks. PC §17(b) can reduce a felony to a misdemeanor. Prop 47 can reclassify older felony convictions. And for juvenile records, WIC §781 allows complete sealing and destruction.',
      'facts' => [
        ['icon' => '✅', 'label' => 'Expungement Dismisses the Conviction',  'detail' => 'Under PC §1203.4, the guilty plea or verdict is withdrawn and the case is dismissed. You can lawfully answer "no" to most private employer questions about convictions.'],
        ['icon' => '⚖', 'label' => 'Felony to Misdemeanor Reduction',       'detail' => 'PC §17(b) allows reduction of wobbler felonies to misdemeanors, removing the felony stigma and potentially restoring certain civil rights.'],
        ['icon' => '🚫', 'label' => 'Important Limits on Expungement',      'detail' => 'Expungement does not seal records from law enforcement, courts, or licensing agencies. It does not restore firearm rights for domestic violence convictions.'],
        ['icon' => '🌟', 'label' => 'Real Employment Impact',               'detail' => 'Research consistently shows expungement significantly improves employment outcomes — most private employers cannot hold an expunged conviction against you.'],
      ],
    ],
    'penalties' => [
      'intro' => 'This section covers what each form of record relief achieves — and where the limits are.',
      'tiers' => [
        [
          'label'  => 'PC §1203.4 Expungement',
          'color'  => 'moderate',
          'items'  => ['Available after completing probation (or early termination)', 'Works for misdemeanor and most felony convictions', 'Conviction dismissed — not sealed, but dismissed', 'Can answer "no" to most private employer conviction questions', 'Does NOT remove DUI from DMV record for 10 years', 'Does NOT expunge from FBI/DOJ federal databases'],
        ],
        [
          'label'  => 'PC §17(b) Felony Reduction + Prop 47',
          'color'  => 'moderate',
          'items'  => ['PC §17(b): reduces wobbler felony to misdemeanor', 'Restores some civil rights and potentially firearm rights', 'Can be combined with §1203.4 expungement for maximum benefit', 'Prop 47: reduces eligible felonies to misdemeanors retroactively', 'Improves immigration position in some cases'],
        ],
        [
          'label'  => 'What Expungement Cannot Remove',
          'color'  => 'critical',
          'items'  => ['Sex offender registration (PC §290) — not relieved by expungement', 'Federal criminal records — separate process required', 'Firearm prohibition for domestic violence misdemeanors (federal)', 'Records visible to law enforcement and courts', 'DMV record (DUI stays 10 years)', 'Professional licensing agency records'],
        ],
      ],
    ],
    'defenses' => [
      ['num' => '01', 'title' => 'PC §1203.4 Expungement Petition',  'body' => 'We prepare and file a comprehensive expungement petition with supporting declarations. For defendants on formal probation, we first file for early termination of probation — then immediately proceed with the expungement petition in the same motion.'],
      ['num' => '02', 'title' => 'PC §17(b) Felony Reduction',       'body' => 'For wobbler felonies, we petition the court to reduce the conviction to a misdemeanor. This is a separate motion from expungement but can be pursued simultaneously for maximum benefit to your record.'],
      ['num' => '03', 'title' => 'Prop 47 Resentencing Petition',    'body' => 'If convicted of a felony that Prop 47 reclassified as a misdemeanor — including simple drug possession, petty theft, and certain property crimes — you can petition for retroactive resentencing regardless of when the conviction occurred.'],
      ['num' => '04', 'title' => 'Juvenile Record Sealing (WIC §781)','body' => 'Juvenile records are sealed and destroyed — not merely dismissed. We evaluate eligibility, prepare the petition, and represent you at the sealing hearing for complete erasure of your juvenile history from all databases.'],
      ['num' => '05', 'title' => 'Certificate of Rehabilitation',     'body' => 'For more serious felony convictions, a Certificate of Rehabilitation (PC §4852.01) is a court order declaring rehabilitation — and serves as an automatic application for a Governor\'s Pardon, the most complete relief available.'],
      ['num' => '06', 'title' => 'Governor\'s Pardon',               'body' => 'A Governor\'s Pardon is the highest form of state relief, restoring civil and political rights including firearm rights in some cases. It does not erase the conviction but signals the highest level of official rehabilitation.'],
    ],
    'faqs' => [
      ['q' => 'How long does the expungement process take?',                         'a' => 'Typically 3–4 months from filing to the hearing date in Orange County Superior Court. If probation must be terminated early first, add 1–2 months. We handle all filings and court appearances — you generally do not need to appear in person.'],
      ['q' => 'Do I need a lawyer for expungement?',                                 'a' => 'Technically no, but the petition must be properly drafted and filed in the correct court, and an attorney can advocate at the hearing if the DA objects. Errors in eligibility analysis or paperwork result in denial. An experienced attorney ensures it is done correctly the first time.'],
      ['q' => 'Will expungement remove my record from background check websites?',   'a' => 'Expungement updates official California DOJ records. However, private background check companies may still show old data scraped from public court records. We advise clients on submitting expungement orders to major background check services to update their databases.'],
      ['q' => 'Can I get a professional license after a conviction?',                'a' => 'It depends on the licensing board and nature of the conviction. Many California boards consider expunged convictions favorably. Some boards (e.g., State Bar, nursing board) still require disclosure of expunged convictions. We advise on your specific situation before you apply.'],
    ],
    'related' => ['dui', 'drug-crimes', 'theft'],
  ],
];

// Resolve slug → data key
$slug = get_post_field('post_name', get_the_ID());
$slugMap = [
  'dui'               => 'dui',   'dui-dwi'          => 'dui',   'dwi'             => 'dui',
  'drug-crimes'       => 'drug-crimes', 'drug-possession'  => 'drug-crimes', 'drugs' => 'drug-crimes',
  'assault'           => 'assault', 'assault-battery'  => 'assault', 'battery'       => 'assault',
  'domestic-violence' => 'domestic-violence', 'domestic'        => 'domestic-violence',
  'theft'             => 'theft',  'theft-crimes'     => 'theft',   'shoplifting'   => 'theft',
  'robbery'           => 'robbery','robbery-burglary' => 'robbery', 'burglary'      => 'robbery',
  'juvenile'          => 'juvenile','juvenile-defense' => 'juvenile',
  'expungement'       => 'expungement','expungements' => 'expungement','record-clearing' => 'expungement',
];
$key  = $slugMap[$slug] ?? array_key_first($practiceData);
$area = $practiceData[$key];

// Build related areas list
$relatedAreas = array_values(array_filter(
  array_map(fn($r) => $practiceData[$r] ?? null, $area['related'])
));
@endphp

  @include('pages.practice-area.hero', ['area' => $area])

  {{-- Two-column body --}}
  <div class="bg-navy">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-16">

        {{-- Main content --}}
        <div class="lg:col-span-8 space-y-24">
          @include('pages.practice-area.overview',  ['area' => $area])
          @include('pages.practice-area.penalties', ['area' => $area])
          @include('pages.practice-area.defense',   ['area' => $area])
          @include('pages.practice-area.faq',       ['area' => $area])
        </div>

        {{-- Sticky sidebar --}}
        <div class="lg:col-span-4">
          <div class="sticky top-28 space-y-6">
            @include('pages.practice-area.sidebar-form', ['area' => $area])
          </div>
        </div>

      </div>
    </div>
  </div>

  @include('pages.practice-area.related-areas', ['relatedAreas' => $relatedAreas, 'currentId' => $area['id']])

  @include('components.cta-banner', [
    'heading'       => 'Facing Charges in Orange County?',
    'body'          => 'The right attorney at the right moment changes your outcome. Call now for a free, confidential case review — available 24/7.',
    'link'          => $phoneTel,
    'linkText'      => $phoneDisplay,
    'secondaryLink' => home_url('/contact'),
    'secondaryText' => 'Submit Case Details Online',
  ])

@endsection
