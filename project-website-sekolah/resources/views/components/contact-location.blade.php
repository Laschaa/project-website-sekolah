@props([
    'address',
    'email',
    'whatsappNumber',
    'mapEmbedUrl',
    'instagramUrl' => null,
    'youtubeUrl' => null,
    'facebookUrl' => null,
])

@php
    $whatsappMessage = "Assalamu'alaikum Admin RA/TKA, saya mau tanya mengenai pendaftaran PPDB";
    $whatsappLink = 'https://wa.me/' . preg_replace('/\D+/', '', $whatsappNumber)
        . '?text=' . rawurlencode($whatsappMessage);
@endphp

<section aria-labelledby="contact-location-title" class="bg-emerald-50/60 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <div class="mb-9 max-w-2xl">
            <p class="text-sm font-semibold tracking-wide text-emerald-800">Kami siap menyambut Anda</p>
            <h2 id="contact-location-title" class="mt-2 text-3xl font-semibold tracking-tight text-stone-900 sm:text-4xl">
                Kontak &amp; Lokasi
            </h2>
            <p class="mt-3 leading-7 text-stone-600">
                Ingin mengenal sekolah lebih dekat atau bertanya tentang pendaftaran? Silakan hubungi kami.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-stretch lg:gap-10">
            <div class="flex flex-col rounded-2xl bg-white p-6 shadow-sm ring-1 ring-emerald-950/5 sm:p-8">
                <h3 class="text-lg font-semibold text-stone-900">Informasi sekolah</h3>

                <dl class="mt-6 space-y-5">
                    <div>
                        <dt class="text-sm font-medium text-stone-500">Alamat</dt>
                        <dd class="mt-1 leading-6 text-stone-800">{{ $address }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-stone-500">Email</dt>
                        <dd class="mt-1">
                            <a href="mailto:{{ $email }}" class="break-all text-emerald-800 underline-offset-4 hover:underline">
                                {{ $email }}
                            </a>
                        </dd>
                    </div>
                </dl>

                <a
                    href="{{ $whatsappLink }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-7 inline-flex min-h-12 items-center justify-center gap-2 self-start rounded-full bg-emerald-800 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-900 focus:outline-none focus:ring-2 focus:ring-emerald-700 focus:ring-offset-2"
                >
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path d="M20.52 3.48A11.86 11.86 0 0 0 12.08 0C5.5 0 .15 5.35.15 11.93c0 2.1.55 4.15 1.6 5.96L.05 24l6.27-1.64a11.9 11.9 0 0 0 5.75 1.47h.01c6.58 0 11.93-5.35 11.93-11.93 0-3.19-1.24-6.19-3.49-8.42ZM12.08 21.8h-.01a9.86 9.86 0 0 1-5.02-1.37l-.36-.21-3.72.97.99-3.63-.24-.37a9.85 9.85 0 0 1-1.51-5.26c0-5.44 4.43-9.87 9.88-9.87a9.8 9.8 0 0 1 6.98 2.9 9.8 9.8 0 0 1 2.89 6.98c0 5.45-4.43 9.88-9.88 9.88Zm5.42-7.4c-.3-.15-1.75-.86-2.02-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.95 1.16-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.37-1.46-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.38-.03-.53-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.08-.79.38-.27.3-1.04 1.02-1.04 2.49s1.07 2.88 1.22 3.08c.15.2 2.1 3.2 5.08 4.49.71.31 1.27.5 1.71.64.72.23 1.37.2 1.89.12.58-.09 1.75-.72 2-1.42.25-.7.25-1.3.18-1.42-.08-.13-.28-.2-.58-.35Z"/>
                    </svg>
                    Tanya lewat WhatsApp
                </a>

                @if (filled($instagramUrl) || filled($youtubeUrl) || filled($facebookUrl))
                    <div class="mt-8 border-t border-stone-100 pt-5">
                        <h4 class="text-sm font-medium text-stone-600">Ikuti kegiatan kami</h4>
                        <nav aria-label="Media sosial sekolah" class="mt-3 flex flex-wrap gap-2">
                            @if (filled($instagramUrl))
                                <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-stone-200 px-4 py-2 text-sm font-medium text-stone-700 transition hover:border-emerald-700 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-700">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-4">
                                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                                        <circle cx="12" cy="12" r="4"/>
                                        <circle cx="17.5" cy="6.5" r=".7" fill="currentColor" stroke="none"/>
                                    </svg>
                                    Instagram
                                </a>
                            @endif
                            @if (filled($youtubeUrl))
                                <a href="{{ $youtubeUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-stone-200 px-4 py-2 text-sm font-medium text-stone-700 transition hover:border-emerald-700 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-700">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"/>
                                    </svg>
                                    YouTube
                                </a>
                            @endif
                            @if (filled($facebookUrl))
                                <a href="{{ $facebookUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-stone-200 px-4 py-2 text-sm font-medium text-stone-700 transition hover:border-emerald-700 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-700">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                        <path d="M13.5 21v-8h2.7l.4-3.1h-3.1v-2c0-.9.3-1.5 1.6-1.5h1.6V3.6c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2v2.3H7.5V13h2.7v8h3.3Z"/>
                                    </svg>
                                    Facebook
                                </a>
                            @endif
                        </nav>
                    </div>
                @endif
            </div>

            <div class="overflow-hidden rounded-2xl bg-white p-2 shadow-sm ring-1 ring-emerald-950/5">
                <iframe
                    src="{{ $mapEmbedUrl }}"
                    title="Peta lokasi sekolah RA/TKA"
                    class="h-72 w-full rounded-lg border-0 sm:h-96 lg:h-full lg:min-h-[24rem]"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
</section>
