<?php get_header(); ?>


<svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <style type="text/css">
      .wave {
        animation: wave 8s linear infinite;
      }

      .wave1 {
        animation: wave1 10s linear infinite;
      }

      .wave2 {
        animation: wave2 12s linear infinite;
      }

      @keyframes wave {
        0% {
          transform: translateX(0%);
        }

        100% {
          transform: translateX(100%);
        }
      }

      @keyframes wave1 {
        0% {
          transform: scaleY(1.2) translateX(0%);
        }

        100% {
          transform: scaleY(1.2) translateX(100%);
        }
      }

      @keyframes wave2 {
        0% {
          transform: scaleY(.8) translateX(0%);
        }

        100% {
          transform: scaleY(.8) translateX(100%);
        }
      }
    </style>
    <path id='sineWave' fill="rgb(21 128 61)" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
  </defs>
  <use class="wave" href="#sineWave" />
  <use class="wave" x="-100%" href="#sineWave" />
  <use class="wave1" href="#sineWave" />
  <use class="wave1" x="-100%" href="#sineWave" />
  <use class="wave2" href="#sineWave" />
  <use class="wave2" x="-100%" href="#sineWave" />
</svg>

<div class="container mx-auto my-8">
  <div class="bg-white py-24 sm:py-32 lg:py-40">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="sm:text-center">
        <h2 class="text-lg font-semibold leading-8 text-green-600">What we do</h2>
        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">We are a completely tech agnostic team passionate about learning technologies.</p>
      </div>

      <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
        <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
          <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-900 text-white sm:shrink-0">
              <!-- Heroicon name: outline/globe-alt -->
              <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
              </svg>
            </div>
            <div class="sm:min-w-0 sm:flex-1">
              <p class="text-lg font-semibold leading-8 text-gray-900">Website Development</p>
              <p class="mt-2 text-base leading-7 text-gray-600">Fully responsive solutions with accessibility and performance from the beginning.</p>
            </div>
          </div>

          <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-900 text-white sm:shrink-0">
              <!-- Heroicon name: outline/wrench -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008z" />
            </svg>
            </div>
            <div class="sm:min-w-0 sm:flex-1">
              <p class="text-lg font-semibold leading-8 text-gray-900">Fullstack Web Applications</p>
              <p class="mt-2 text-base leading-7 text-gray-600">Robust solutions with modern technology stacks built so you don't have to.</p>
            </div>
          </div>

          <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-900 text-white sm:shrink-0">
              <!-- Heroicon name: outline/device-phone-mobile -->
              <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
              </svg>
            </div>
            <div class="sm:min-w-0 sm:flex-1">
              <p class="text-lg font-semibold leading-8 text-gray-900">Mobile Development</p>
              <p class="mt-2 text-base leading-7 text-gray-600">Cross platform solutions built with your team and your needs in mind.</p>
            </div>
          </div>

          <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-900 text-white sm:shrink-0">
              <!-- Heroicon name: outline/bolt -->
              <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
              </svg>
            </div>
            <div class="sm:min-w-0 sm:flex-1">
              <p class="text-lg font-semibold leading-8 text-gray-900">On time delivery</p>
              <p class="mt-2 text-base leading-7 text-gray-600">We work hard so you don't have to.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mx-auto my-8">
    <div class="sm:text-center">
      <h2 class="text-lg font-semibold leading-8 text-green-600">Technologies</h2>
      <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">by taking an always learning approach, our skills are always growing.</p>
    </div>
    <div class="relative flex flex-col justify-center gap-6 sm:flex-row md:flex-col lg:flex-row my-12">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/240px-HTML5_logo_and_wordmark.svg.png" class="h-12 w-12" alt="html 5"/>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/240px-CSS3_logo_and_wordmark.svg.png" class="h-12 w-12" alt="css 3"/>
        <img src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" class="h12 w-12" alt="javascript" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Expressjs.png/240px-Expressjs.png" class="h-12 w-13" alt="express" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/590px-Node.js_logo.svg.png" class="h-12 w-14" alt="node js" />
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K" class="h-12 w-12" alt="react js" />
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkSKpjWP2yvVBxiPJgB1hnAPKp-F4rvd6OZmVRk3xi6tCGZe_tcDzNek-nskxntA-dFKk&usqp=CAU" class="h-12 w-12" alt="wordpress" />
        <img src="https://images.ctfassets.net/23aumh6u8s0i/c04wENP3FnbevwdWzrePs/1e2739fa6d0aa5192cf89599e009da4e/nextjs" class="h-12 w-12" alt="next js" />
        <img src="https://miro.medium.com/max/1200/0*T6pKJjgoPIBy_u-_.png" class="h-12 w-13" alt="svelte" />
        <img src="https://www.solidjs.com/assets/logo.123b04bc.svg" class="h-12 w-12" alt="solid js" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/1200px-Typescript_logo_2020.svg.png" class="h-12 w-12" alt="typescript" />
    </div>
  </div>
</div>



<div class="container mx-auto my-8">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
