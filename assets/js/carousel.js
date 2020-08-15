class Carousel {

    constructor (element, option ={}) {
        this.element = element
        this.options = Object.assign({},{

            slidesToScroll : 1,
            slidesVisible : 4
        }, options)
        debugger
    }
}

new Carousel (document.querySelector('#carousel'), {
    slidesToScroll : 1,
    slidesVisible : 4
})


