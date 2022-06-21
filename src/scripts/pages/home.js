import gsap from 'gsap'
import $ from 'jquery'
import Inputmask from 'inputmask'

import Scroll from '../utils/scroll'

const pageurl = document.querySelector('body').id

if(pageurl == 'home'){
    const scroll = new Scroll()

    // gsap.ticker.add(() => { 
    //     gsap.to('h2', {
    //       y: -scroll.screenPosition/2,
    //       autoAlpha: scroll.screenPosition/500,
    //       ease: 'power2.out',
    //       duration: 1.6
    //     })
    // })

  $('.toggle-header').on('click', function(){
    $(this).parent().toggleClass('active');
  });

  Inputmask({"mask": "99999-999"}).mask('#cep')
  Inputmask({"mask": "R$ 999.999,99"}).mask('#valor')
  Inputmask({"mask": "999.999"}).mask('#consumo')

  // $("#cep").mask("99999-999");
}