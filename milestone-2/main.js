Vue.config.devtools = true;

var app = new Vue ({
  el:'#root',
  data: {
    selezione: '',
    albums: [],
    generi: [],
  },
  mounted () {
    let origine = this
    axios.get('http://localhost/php-ajax-dischi/milestone-2/api/music.php')
    .then(function (response) {
    origine.albums = response.data.response;
    console.log(origine.albums);

    origine.albums.forEach((album, i) => {
      if (!origine.generi.includes(album.genre)) {
        origine.generi.push(album.genre)
      }
    });

    });
  },
  methods: {
  }
})
