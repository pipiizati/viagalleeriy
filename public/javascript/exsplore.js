var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate) {
    // var userlike, userfavorite;
    $.ajax({
        url: window.location.origin +'/getDataExplore/'+ '?page='+ paginate,
        type: "GET",
        dataType: "JSON",
        success: function (e) {
            console.log(e)
            e.data.data.map((x) => {
                 var hasilPencarian = x.like.filter(function(hasil){
                    return hasil.user_id === e.idUser
                 })
                 if(hasilPencarian.length <= 0) {
                     userlike = 0;
                 } else {
                     userlike = hasilPencarian[0].user_id;
                 }
                // var hasilPencarianFavorite = x.favorite.filter(function(hasil){
                //     return hasil.id_user === e.idUser
                // })
                // if(hasilPencarianFavorite.length <= 0) {
                //     userfavorite = 0;
                // } else {
                //     userfavorite = hasilPencarianFavorite[0].id_user;
                // }

                let datanya = {
                    id: x.id,
                    judul_foto: x.judul_foto,
                    deskripsi_foto: x.deskripsi_foto,
                    foto: x.lokasi_file,
                    // tanggal: x.created_at,
                     jml_comment: x.komentar_count,
                     jml_like: x.like_count,
                     idUserLike: userlike,
                     useractive: e.idUser,
                    // userfavorite: userfavorite
                }
                dataExplore.push(datanya)
                //  console.log(userlike)
                //  console.log(e.idUser)
            })
            getExplore()
        },
        error: function (jqXHR, textStatus, errorThrown) {

        }
    })
}

const getExplore = () => {
    $('#exploredata').html('')
    dataExplore.map((x, i) => {
        $('#exploredata').append(
            `
            <div class="lg:w-1/2 mx-auto">
            <div class="flex flex-col">
                <div class="w-[363px] h-[192px] bg-slate-500 overflow-hidden">
                    <img src="/foto/${x.foto}" alt="">
                </div>
                <div>
                      <div class="flex items-center justify-between mr-6">
                           <div>
                                <div class="flex flex-col">
                                     <div>
                                          <span class="">${x.judul_foto}</span>
                                     </div>
                                     <div>
                                          <span class="text-xs text-gray-500">${x.deskripsi_foto}</span>
                                     </div>
                                </div>
                           </div>
                           <div>
                                <div class="flex gap-3">
                                     <div>
                                          <span></span>
                                     </div>
                                     <div>
                                     <a href="/detail_komen/${x.id}">
                                          <span>${x.jml_comment}</span>
                                          <span class="bi bi-chat-left-text"></span>
                                     </a>
                                          <span>${x.jml_like}</span>
                                          <span class="bi ${x.idUserLike === x.useractive ? 'bi-heart-fill' : 'bi-heart'}" onclick="likes(this, ${x.id})"></span>
                                          </div>
                                     </div>
                                </div>
                           </div>
                      </div>
                 </div>
            </div>
       </div>
            `
        )
    })
}


 function likes (txt, id) {
    $.ajax({
        url: window.location.origin +'/likefoto',
         dataType: "JSON",
        type: "POST",
        data: {
             _token: $('input[name="_token"]').val(),
             fotoid: id,
             },
             success: function(res) {
                 console.log(res)
                location.reload()
             },
             error: function(jqXHR, textStatus, errorThrown){
                 alert('gagal')
         }
     })
}

// function pinned (txt, id) {
//     $.ajax({
//         url: window.location.origin +'/pinned',
//         dataType: "JSON",
//         type: "POST",
//         data: {
//             _token: $('input[name="_token"]').val(),
//             idfoto: id,
//             },
//             success: function(res) {
//                 console.log(res)

//             },
//             error: function(jqXHR, textStatus, errorThrown){
//                 alert('gagal')
//         }
//     })
// }
