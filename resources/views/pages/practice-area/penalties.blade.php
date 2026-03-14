{{-- Practice Area: Penalties --}}
@php
$colorMap = [
  'moderate' => ['border' => 'border-gold/40',   'dot' => 'bg-gold/60',   'badge' => 'bg-gold/10 text-gold border-gold/30',      'label' => 'text-gold'],
  'high'     => ['border' => 'border-urgent/50', 'dot' => 'bg-urgent/70', 'badge' => 'bg-urgent/10 text-urgent border-urgent/30', 'label' => 'text-urgent'],
  'critical' => ['border' => 'border-urgent',    'dot' => 'bg-urgent',    'badge' => 'bg-urgent/20 text-white border-urgent/50',  'label' => 'text-white'],
];
$severityLabels = ['moderate' => 'Moderate', 'high' => 'Serious', 'critical' => 'Severe'];
@endphp

<div id="penalties">

  {{-- Section label --}}
  <div class="flex items-center gap-4 mb-10">
    <span class="text-gold/40 font-display text-xs font-bold uppercase tracking-[0.25em]">Penalties</span>
    <div class="h-px flex-1 bg-gold/15"></div>
  </div>

  <h2 class="font-display text-3xl lg:text-4xl text-cream font-bold mb-4">
    What You're Facing
  </h2>

  <p class="text-cream/55 text-sm leading-relaxed mb-10 max-w-2xl">
    {{ $area['penalties']['intro'] }}
  </p>

  {{-- Severity scale legend --}}
  <div class="flex flex-wrap items-center gap-4 mb-8 pb-8 border-b border-gold/10">
    <span class="text-cream/30 text-[10px] uppercase tracking-[0.2em]">Severity scale:</span>
    @foreach (['moderate' => 'Moderate', 'high' => 'Serious', 'critical' => 'Severe'] as $sev => $label)
    @php $c = $colorMap[$sev] @endphp
    <span class="inline-flex items-center gap-2 border {{ $c['badge'] }} text-[10px] uppercase tracking-[0.15em] font-bold px-3 py-1">
      <span class="w-1.5 h-1.5 rounded-full {{ $c['dot'] }}"></span>
      {{ $label }}
    </span>
    @endforeach
  </div>

  {{-- Tier cards --}}
  <div class="space-y-4">
    @foreach ($area['penalties']['tiers'] as $i => $tier)
    @php $c = $colorMap[$tier['color']] @endphp
    <div class="bg-navy-mid border-l-4 {{ $c['border'] }} overflow-hidden">
      {{-- Tier header --}}
      <div class="flex items-center justify-between px-6 py-4 border-b border-gold/10">
        <div class="flex items-center gap-3">
          <span class="font-display font-bold text-gold/30 text-sm">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <h3 class="font-display font-bold {{ $c['label'] }} text-lg">{{ $tier['label'] }}</h3>
        </div>
        <span class="inline-flex items-center gap-1.5 border {{ $c['badge'] }} text-[9px] uppercase tracking-[0.15em] font-bold px-2.5 py-1 shrink-0">
          <span class="w-1.5 h-1.5 rounded-full {{ $c['dot'] }}"></span>
          {{ $severityLabels[$tier['color']] }}
        </span>
      </div>

      {{-- Penalty items --}}
      <div class="px-6 py-5">
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-2.5">
          @foreach ($tier['items'] as $item)
          <li class="flex items-start gap-3 text-cream/60 text-sm">
            <span class="shrink-0 w-1.5 h-1.5 rounded-full {{ $c['dot'] }} mt-1.5"></span>
            {{ $item }}
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    @endforeach
  </div>

  {{-- Disclaimer --}}
  <p class="mt-6 text-cream/25 text-xs leading-relaxed border-l border-gold/20 pl-4">
    Penalties listed reflect California statutory ranges. Actual sentences depend on criminal history, aggravating factors, and judicial discretion. This is general information, not legal advice. Consult a licensed attorney for your specific situation.
  </p>

</div>
