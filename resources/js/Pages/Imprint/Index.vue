<!-- eslint-disable max-len -->
<template>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="w-full font-bold text-center text-2xl mb-4">{{ $t('imprint.imprint') }}</h1>
            <h2 class="w-full font-bold text-center text-lg my-4">{{ $t('imprint.information_according') }}</h2>
            <span class="text-sm">
                Björn Büttner<br/>
                Böllerts Höfe 4<br/>
                45479 Mülheim an der Ruhr<br/>
            </span>
            <h1 class="w-full font-bold text-center text-2xl my-4">{{ $t('imprint.contact') }}</h1>
            <span class="text-sm">
                {{ $t('imprint.telephone') }}: +49 176 47945826<br/>
                E-Mail:
                <a class="link" href="mailto:webmaster@bjoern-buettner.me">
                    webmaster@bjoern-buettner.me
                </a>
            </span>
            <h1 class="w-full font-bold text-center text-2xl my-4">
                {{ $t('imprint.responsible') }}
            </h1>
            <span class="text-sm">
                Björn Büttner<br/>
                Böllerts Höfe 4<br/>
                45479 Mülheim an der Ruhr<br/>
            </span>
            <h1 class="w-full font-bold text-center text-2xl my-4">{{ $t('imprint.disclaimer') }}:</h1>
            <h2 class="w-full font-bold text-center text-lg my-4">{{ $t('imprint.liability_for_links') }}</h2>
            <p class="text-sm my-2">
                {{ $t('imprint.liability_for_links_text') }}
            </p>
            <h1 class="w-full font-bold text-center text-2xl my-4">{{ $t('imprint.data_protection') }}:</h1>
            <p class="text-sm my-2">
                {{ $t('imprint.data_protection_text1') }}
            </p>
            <p class="text-sm my-2">
                {{ $t('imprint.data_protection_text2') }}
            </p>
            <p class="text-sm my-2">
                {{ $t('imprint.data_protection_text3') }}
            </p>
            <p class="text-sm my-2">
                {{ $t('imprint.data_protection_text4') }}
            </p>
            <p class="text-sm my-2">
                {{ $t('imprint.data_protection_text5') }}
            </p>
        </div>
    </section>
</template>

<script>
export default {
  name: 'ImprintIndex',
};
</script>
