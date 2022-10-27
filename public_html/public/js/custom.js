$( document ).ready(function() {
    $(".filterMore").on("change",function () {
        // var id=$(this).val();
        // $('option').attr("selected","selected");
        var name=$(this).find('option:selected').attr("name");
        console.log('name',name);
        var id=$(this).val();
        console.log(id);
        $.ajax(
            {
                url: 'filter',
                type: 'get',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id_subcategory: id,
                    name:name,


                },
                datatype:"html",
                success: function (result) {
                    console.log(result);
                    $('.listProductcategory').html(result);

                },
                error: function(e) {
                    alert('Error' + e);
                }
            } );

    })
});
function wishlist(id_pro){
    console.log(id_pro);
    $.ajax({
        type:'get',
        url:'<?php echo URL::to('yeu-thich')?>',
        data:{
            id_pro:id_pro
        },

        success:function (data) {
            console.log(data);
            if(data=="thanh cong"){
                $.alert({
                    title: 'Thành công',
                    content: 'Đã thêm vào danh sách yêu thích',
                });

            }
            else if(data=="that bai")
            {
                $.alert({
                    title: 'Thất bại',
                    content: 'Sản phẩm đã tồn tại trong danh sách yêu thích',
                });
            }
            else {
                $.alert({
                    title: 'Thất bại',
                    content: 'Bạn cần đăng nhập để thực hiện chức năng này',
                });
            }

        }
    })
}
function wishlist(id_pro){
    console.log(id_pro);
    $.ajax({
        type:'get',
        url:'<?php echo URL::to('yeu-thich')?>',
        data:{
            id_pro:id_pro
        },

        success:function (data) {
            console.log(data);
            if(data=="thanh cong"){
                $.alert({
                    title: 'Thành công',
                    content: 'Đã thêm vào danh sách yêu thích',
                });

            }
            else if(data=="that bai")
            {
                $.alert({
                    title: 'Thất bại',
                    content: 'Sản phẩm đã tồn tại trong danh sách yêu thích',
                });
            }
            else {
                $.alert({
                    title: 'Thất bại',
                    content: 'Bạn cần đăng nhập để thực hiện chức năng này',
                });
            }

        }
    })
}