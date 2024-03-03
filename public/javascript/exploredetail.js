var segmentTerakhir = window.location.href.split('/').pop();

$.ajax({
    url:window.location.origin +'/detail_komen/'+segmentTerakhir+'/getdatadetail',
    type: "GET",
    dataType: "JSON",
    success: function(res){
        console.log(res)
        $('#fotodetail').prop('src', '/foto/'+res.dataDetailFoto.lokasi_file)
        $('#judulfoto').html(res.dataDetailFoto.judul_foto)
        $('#deskripsifoto').html(res.dataDetailFoto.deskripsi_foto)
        $('#profile').prop('src','/foto_profile/'+res.dataDetailFoto.user.picture)
        // $('#jumlahpengikut').html(res.dataJumlahFollow.jmlfolow + ' Pengikut')
        $('#username').html(res.dataDetailFoto.user.username)
        ambilKomentar()
        // var idUser ;
        // if(res.dataFollow == null){
        //     idUser=""
        // } else {
        //     idUser = res.dataFollow.id_user
        // }
        // if(res.dataDetailFoto.id_user === res.dataUser){
        //     $('#tombolfollow').html('')
        // } else {
        //     if(idUser == res.dataUser){
        //         $('#tombolfollow').html('<button class="px-4 rounded-full bg-bgcolor2" onclick ="ikuti(this, '+res.dataDetailFoto.id_user+')">Tidak Ikuti</button>')
        //     } else {
        //         $('#tombolfollow').html('<button class="px-4 rounded-full bg-bgcolor2" onclick ="ikuti(this, '+res.dataDetailFoto.id_user+')">Ikuti</button>')

        //     }
        // }
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('gagal')
    }
})

function ambilKomentar(){
    $.getJSON(window.location.origin +'/detail_komen/getComment/'+segmentTerakhir, function(res){
        console.log(res)
        if(res.data.length === 0){
            $('#listkomentar').html('<div>belum ada komen</div>')
        } else {
            comment= []
            res.data.map((x)=>{
                let datacomentar = {
                    idUser: x.user.id,
                    pengirim: x.user.username,
                    waktu: x.created_at,
                    isikomentar: x.isi_komentar,
                    potopengirim: x.user.picture
                }
                comment.push(datacomentar);
            })
            tampilkankomentar()
        }
    })
}

const tampilkankomentar = ()=>{
    $('#listkomentar').html('')
    comment.map((x, i)=>{
        $('#listkomentar').append(`
            <div class="flex flex-row justify-start mt-4">
                <div class="w-1/4">
                    <img src="/foto_profile/${x.potopengirim}" class="w-8 h-auto rounded-full" alt="">
                </div>
                <div class="flex flex-col mr-2">
                    <h5 class="text-sm">${x.pengirim}</h5>
                    <small class="text-xs text-abuabu">${new Date(x.waktu).toLocaleDateString("id")}</small>
                </div>
                    <h5 class="text-sm">${x.isikomentar}</h5>
            </div>
        `)
    })
}

function kirimkomentar(){
    $.ajax({
        url: window.location.origin +'/detail_komen/kirimkomentar',
        type: "POST",
        dataType: "JSON",
        data: {
            _token: $('input[name="_token"]').val(),
            fotoid: segmentTerakhir,
            isi_komentar: $('input[name="isi_komentar"]').val(),
        },
        success: function(res){
            $('input[name="isi_komentar"]').val('')
            location.reload()
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal')
        }
    })
}

// setInterval(ambilKomentar, 500);

// function ikuti(txt, idfollow){
//     $.ajax({
//         url: window.location.origin +'/explore-detail/ikuti',
//         type: "POST",
//         dataType: "JSON",
//         data: {
//             idfollow: idfollow,
//             _token: $('input[name="_token"]').val()
//         }, success: function(res){
//             location.reload()
//         }, error:function(jqXHR, textStatus, errorThrown){
//             alert('gagal');
//         }
//     })
// }
