<?php // Template Name: Home Page

get_header(); ?>

<div class="bg-blue-900 font-sans">
      <div class="relative overflow-hidden">
        <div class="max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:py-32 lg:px-8">
          <div class="relative z-10 text-center lg:text-left">
            <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl lg:text-7xl">
              
              
              <span class="text-white-400">  Explore Our Mix of Accessories</span>
            </h1>
            <p class="mt-4 max-w-md mx-auto text-lg text-white sm:text-xl md:mt-5 md:max-w-3xl">
              Elevate your culinary experience with our exclusive premium services. Indulge in exquisite flavors and extraordinary moments.
            </p>
            <div class="mt-12 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <button class="w-full flex items-center justify-center px-8 py-3 text-base font-semibold rounded-md text-white bg-blue-600 hover:text-white-500 hover:bg-blue-600 transition duration-150 ease-in-out">
                  Shop Now
                </button>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-4">
                <button class="w-full flex items-center justify-center px-8 py-3 text-base font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-500 transition duration-150 ease-in-out">
                  Learn More
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-4.jpg" alt="Delicious Food" />
        </div>
      </div>
    </div>


<!-- Product Sample -->
<section class="bg-white py-12 text-gray-700 sm:py-16 lg:py-20">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-md text-center">
      <h2 class="font-serif text-2xl font-bold sm:text-3xl">Explore Our Mix of Accessories</h2>
    </div>

    <div class="mt-10 grid grid-cols-2 gap-6 sm:grid-cols-4 sm:gap-4 lg:mt-16">
      
  <?php
      $args = array(
          'post_type' => 'product', // Change 'product' to your custom post type if needed
          'posts_per_page' => 8 // Display all products
      );

      $products_query = new WP_Query( $args );

      if ( $products_query->have_posts() ) : 
          while ( $products_query->have_posts() ) : $products_query->the_post();
              ?>
              <article class="relative flex flex-col overflow-hidden rounded-lg border">
                  <div class="aspect-square overflow-hidden">
                      <?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover transition-all duration-300 group-hover:scale-125' ) ); ?>
                  </div>
                  <div class="absolute top-0 m-2 rounded-full bg-white">
                      <?php if ( get_post_meta( get_the_ID(), 'is_on_sale', true ) == 'yes' ) : ?>
                          <p class="rounded-full bg-emerald-500 p-1 text-[8px] font-bold uppercase tracking-wide text-white sm:py-1 sm:px-3">Sale</p>
                      <?php endif; ?>
                  </div>
                  <div class="my-4 mx-auto flex w-10/12 flex-col items-start justify-between">
                      <div class="mb-2 flex">
                          <p class="mr-3 text-sm font-semibold"><?php echo wc_price( get_post_meta( get_the_ID(), '_regular_price', true ) ); ?></p>
                          <?php if ( get_post_meta( get_the_ID(), 'is_on_sale', true ) == 'yes' ) : ?>
                              <del class="text-xs text-gray-400"><?php echo wc_price( get_post_meta( get_the_ID(), '_sale_price', true ) ); ?></del> 
                          <?php endif; ?>
                      </div>
                      <h3 class="mb-2 text-sm text-gray-400"><?php the_title(); ?></h3>
                  </div>
                  <a href = "<?php echo get_the_permalink(); ?>"><button class="group mx-auto mb-2 flex h-10 w-10/12 items-stretch overflow-hidden rounded-md text-gray-600">
                      <div class="flex w-full items-center justify-center bg-gray-100 text-xs uppercase transition group-hover:bg-blue-500 group-hover:text-white">View</div>
                      <div class="flex items-center justify-center bg-gray-200 px-5 transition group-hover:bg-blue-500 group-hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
</svg>
</div>
                  </button> </a>

                  <div class="flex w-full items-center justify-center bg-gray-100 text-xs uppercase transition group-hover:bg-emerald-600 group-hover:text-white">

</div>


              </article>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          echo 'No products found';
      endif;
      ?>
            
   
    </div>
  </div>
</section>


<!-- POST / Blogs -->
<section class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8"> 
    <!-- Heading -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Most Recent Posts</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>
    </div>
    <!-- /Heading -->
    <div class="grid gap-8 sm:grid-cols-2 sm:gap-12 lg:grid-cols-2 xl:grid-cols-2 xl:gap-16">
      <!-- Article -->
      <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-24 md:w-24 lg:h-40 lg:w-40">
          <img src="https://images.unsplash.com/photo-1476362555312-ab9e108a0b7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-col gap-2">
          <span class="text-sm text-gray-400">April 2, 2022</span>

          <h2 class="text-xl font-bold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">The Pines and the Mountains</a>
          </h2>

          <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

          <div>
            <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
          </div>
        </div>
      </article>
      <!-- /Article -->
      <!-- Article -->
      <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-24 md:w-24 lg:h-40 lg:w-40">
          <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-col gap-2">
          <span class="text-sm text-gray-400">April 2, 2022</span>

          <h2 class="text-xl font-bold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">The Coding Mania</a>
          </h2>

          <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

          <div>
            <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
          </div>
        </div>
      </article>
      <!-- /Article -->
      <!-- Article -->
      <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-24 md:w-24 lg:h-40 lg:w-40">
          <img src="https://images.unsplash.com/photo-1496395031280-4201b0e022ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-col gap-2">
          <span class="text-sm text-gray-400">April 2, 2022</span>

          <h2 class="text-xl font-bold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">Architectural Warfare</a>
          </h2>

          <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

          <div>
            <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
          </div>
        </div>
      </article>
      <!-- /Article -->
      <!-- Article -->
      <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-24 md:w-24 lg:h-40 lg:w-40">
          <img src="https://images.unsplash.com/photo-1510081887155-56fe96846e71?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-col gap-2">
          <span class="text-sm text-gray-400">April 2, 2022</span>

          <h2 class="text-xl font-bold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">Blues in Architechture</a>
          </h2>

          <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

          <div>
            <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
          </div>
        </div>
      </article>
      <!-- /Article -->
    </div>
  </div>
</section>

<!-- Contact US -->
<div class="sm:p-10 my-auto">
  <section class="mx-auto max-w-screen-xl md:rounded-md md:border md:shadow-lg">
    <div class="grid grid-cols-4 text-gray-800 lg:grid-cols-3">
      <div class="col-span-4 bg-gray-50 px-8 py-10 text-gray-800 md:col-span-2 md:border-r md:px-10 md:py-12 lg:col-span-1">
        <h2 class="mb-8 text-2xl font-black">Contact me</h2>
        <ul>
          <li class="mb-6 flex items-start text-left">
            <svg class="shrink-0 mr-6 text-2xl text-gray-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z" /></svg>
            <div>
              <a class="cursor-pointer font-serif text-base md:text-lg" href="#">abraham@microsoft.com</a>
              <span class="block text-xs uppercase">email</span>
            </div>
          </li>
          <li class="my-6 flex items-center text-left">
            <svg class="shrink-0 mr-6 text-2xl text-gray-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm215.3 337.7c.3 4.7.3 9.6.3 14.4c0 146.8-111.8 315.9-316.1 315.9c-63 0-121.4-18.3-170.6-49.8c9 1 17.6 1.4 26.8 1.4c52 0 99.8-17.6 137.9-47.4c-48.8-1-89.8-33-103.8-77c17.1 2.5 32.5 2.5 50.1-2a111 111 0 0 1-88.9-109v-1.4c14.7 8.3 32 13.4 50.1 14.1a111.13 111.13 0 0 1-49.5-92.4c0-20.7 5.4-39.6 15.1-56a315.28 315.28 0 0 0 229 116.1C492 353.1 548.4 292 616.2 292c32 0 60.8 13.4 81.1 35c25.1-4.7 49.1-14.1 70.5-26.7c-8.3 25.7-25.7 47.4-48.8 61.1c22.4-2.4 44-8.6 64-17.3c-15.1 22.2-34 41.9-55.7 57.6z" /></svg>
            <div>
              <a class="cursor-pointer font-serif text-base md:text-lg" href="#">abrahama.real</a>
              <span class="block text-xs uppercase">twitter</span>
            </div>
          </li>
          <li class="my-6 flex items-center text-left">
            <svg class="shrink-0 mr-6 text-2xl text-gray-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd" /></svg>
            <div>
              <p class="font-serif text-base md:text-lg">abraham</p>
              <span class="block text-xs uppercase">LinkedIn</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="order-first col-span-4 max-w-screen-md px-8 py-10 md:order-last md:col-span-2 md:px-10 md:py-12">
        <h2 class="mb-8 text-2xl font-black">Get in touch</h2>
        <p class="mt-2 mb-4 font-sans text-sm tracking-normal">Don't be shy to ask me a question.</p>
        <form action="">
          <div class="md:col-gap-4 mb-5 grid md:grid-cols-2">
            <input class="col-span-1 w-full border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" type="text" placeholder="Name" name="name" />
            <input class="col-span-1 w-full border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" type="email" placeholder="Email" name="email" />
          </div>
          <textarea class="mb-10 w-full resize-y whitespace-pre-wrap border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" id="" rows="6" placeholder="Question" name="question"></textarea>
          <button type="submit" class="group flex cursor-pointer items-center rounded-xl bg-blue-500 bg-none px-8 py-4 text-center font-semibold leading-tight text-white">
            Send
            <svg class="group-hover:ml-8 ml-4 transition-all" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.912 12H4L2.023 4.135A.662.662 0 0 1 2 3.995c-.022-.721.772-1.221 1.46-.891L22 12L3.46 20.896c-.68.327-1.464-.159-1.46-.867a.66.66 0 0 1 .033-.186L3.5 15" /></svg>
          </button>
        </form>
      </div>
    </div>
  </section>
</div>


<?php get_footer(); ?>