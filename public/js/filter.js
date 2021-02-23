const $container_cards = document.getElementById('container-cards')
const $filter_cards = document.getElementById('filter-cards')
//const $card = document.getElementById('card')
const $card_links = document.getElementById('card-links')

const $svg_image = document.querySelectorAll('.svg-image')

const $titulo = document.getElementById('titulo')
let oldId_filter = ''

const filterCardsObject = {
  categorias: {
    dev_web: {
      0: {
        title: 'Javascript',
        imagen: 'VD-JS.png'
      },
      1: {
        title: 'C#',
        imagen: 'VD-C#.png'
      },
      2: {
        title: 'HTML 5',
        imagen: 'VD-HTML.jpg'
      },
      3: {
        title: 'CSS 3',
        imagen: 'VD-CSS.png'
      },
      4: {
        title: 'React',
        imagen: 'VD-REACT.jpeg'
      },
      5: {
        title: 'VUE',
        imagen: 'VD-VUE.jpeg'
      },
      6: {
        title: 'PHP 8',
        imagen: 'VD-PHP.png'
      },
      7: {
        title: 'NodeJS',
        imagen: 'VD-NODEJS.png'
      }
    },
    dev_movil: {
      0: {
        title: 'Kotlin',
        imagen: 'VD-KOTLIN.png'
      },
      1: {
        title: 'React Native',
        imagen: 'VD-REACTNATIVE.png'
      },
      2: {
        title: 'Swift',
        imagen: 'VD-SWIFT.jpg'
      },
      3: {
        title: 'Javascript',
        imagen: 'VD-JS.png'
      }
    },
    dev_api: {
      0: {
        title: 'NodeJS',
        imagen: 'VD-NODEJS.png'
      },
      1: {
        title: 'Python',
        imagen: 'VD-PY.jpg'
      },
      2: {
        title: 'PHP 8',
        imagen: 'VD-PHP.png'
      },
      3: {
        title: 'React',
        imagen: 'VD-REACT.jpeg'
      }
    }
  }
}

printCards(filterCardsObject.categorias['dev_movil'], 'Desarrollo Móvil')

window.onload = () => {
  //printCards(filterCardsObject.categorias['dev_movil'],'Desarrollo Móvil')

  $filter_cards.addEventListener('click', (e) => {
    e.preventDefault();
    let newId_filter = e.target.id
    btnTransition(newId_filter, oldId_filter, true)
    oldId_filter = newId_filter
    let categories = e.target.text


    if(newId_filter === 'dev-web') {
      while ($container_cards.firstChild) {
        $container_cards.removeChild($container_cards.firstChild);
      }
      printCards(filterCardsObject.categorias['dev_web'], categories)
    } else if (newId_filter === 'dev-movil') {
      while ($container_cards.firstChild) {
        $container_cards.removeChild($container_cards.firstChild);
      }
      printCards(filterCardsObject.categorias['dev_movil'], categories)
    } else if (newId_filter === 'dev-api') {
      while ($container_cards.firstChild) {
        $container_cards.removeChild($container_cards.firstChild);
      }
      printCards(filterCardsObject.categorias['dev_api'], categories)
    }





  })

  $card.addEventListener('mouseenter', (e) => {
    e.preventDefault()
    $svg_image.forEach(elementoLista => elementoLista.classList.add('opacity-transition'))
    $svg_image.forEach(elementoLista => elementoLista.classList.remove('opacity'))

  })

  $card.addEventListener('mouseleave', (e) => {
    e.preventDefault()
    $svg_image.forEach(elementoLista => elementoLista.classList.remove('opacity-transition'))
    $svg_image.forEach(elementoLista => elementoLista.classList.add('opacity'))
  })

  $card_links.addEventListener('', (e) => {
    e.preventDefault()
  })


}

function btnTransition(idNew, idOld, flag) {
  if(flag){
    document.getElementById('dev-movil').classList.remove('active')
    document.getElementById('dev-movil').classList.add('hover')
  }
  if(idOld !== '') {
    document.getElementById(idOld).classList.remove('active')
    document.getElementById(idOld).classList.add('hover')
  }
  document.getElementById(idNew).classList.remove('hover')
  document.getElementById(idNew).classList.add('active')
}

function printCards(categoryObject, category) {
  let content = ''
  let cards = ''
  for (const key in categoryObject) {
    //console.log(categoryObject[key].title)
   //s console.log(categoryObject[key].imagen)

    let htmlCard =`<div class="card" id="card"><div class="card-image" style="background: url('{{URL::asset('assets/${categoryObject[key].imagen}')}}') top/100%"><div class="card-links" id="card-links"><a href="#" class="links"><img src="{{URL::asset('svg/twitter.svg') }}" class="svg-image" alt=""></a><a href="#" class="links"><img src="{{URL::asset('svg/facebook.svg') }}" class="svg-image" alt=""></a><a href="#" class="links"><img src="{{URL::asset('svg/github.svg') }}" class="svg-image" alt=""></a></div></div><div class="card-info"><h3 class="title-technology" id="title-technology">${categoryObject[key].title}</h3><h3 class="title-category" id="title-category">${category}</h3></div></div>`

  cards += htmlCard
}

$container_cards.innerHTML = cards
}