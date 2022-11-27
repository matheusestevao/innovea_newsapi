$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('.reference-search').on('change', function() {
        let reference = $(this).val();

        $('.everything, .top-headlines').addClass('d-none');

        switch (reference) {
            case '1':
                $('.everything').removeClass('d-none');
                break;
            
            case '2':
                $('.top-headlines').removeClass('d-none');
                break
            default:
                break;
        }
    });


    $('.search-news').on('click', function() {
        $('.text-default-btn').addClass('d-none');
        $('.effect-btn, .text-spinner-button').removeClass('d-none');

        $('#news tbody').html('')

        let reference = $('.reference-search').val();
        let subject = $('.subject').val();
        $('.section-list-news').removeClass('d-none');
        
        switch (reference) {
            case '1':
                if(!subject) {
                    swal.fire({
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 6000,
                        background: '#e74c3c',
                        icon: 'error',
                        timerProgressBar: true,
                        customClass: {
                            title: 'text-white'
                        },
                        title: requiredSubject
                    });

                    break;
                }
                
                $('#news').DataTable({
                    processing: false,
                    serverSide: false,
                    paging: false,
                    searching: false,
                    ajax: {
                        url: route_everything,
                        type: 'POST',
                        data: {
                            'q': $('.subject').val(),
                            'searchIn': $('.searchIn:checked').val(),
                            'domains': $('.domains').val(),
                            'excludeDomains': $('.excludeDomains').val(),
                            'from': $('.from').val(),
                            'to': $('.to').val(),
                            'language': $('.language').val(),
                            'sortBy': $('.sortBy').val(),
                        },
                        dataSrc: function ( json ) {
                            return json.articles;
                        },
                        error: function(jqXHR, exception, error) {
                            if(jqXHR.status) {
                                let msgError = jqXHR.responseJSON.message.split("\"message\":\"");
                                
                                swal.fire({
                                    toast: true,
                                    position: 'bottom-end',
                                    showConfirmButton: false,
                                    timer: 6000,
                                    background: '#e74c3c',
                                    icon: 'error',
                                    timerProgressBar: true,
                                    customClass: {
                                        title: 'text-white'
                                    },
                                    title: msgError[1]
                                });
                            }
                        },
                    },
                    columns: [
                        {data: 'title'},
                        {data: 'description'},
                        {data: 'author'},
                        {data: null}
                    ],
                    columnDefs:[{
                        targets:3, 
                        data:"url", 
                        "render": function(data,type,full,meta){ 
                            return '<a class="btn btn-primary" target="_blank" href='+data.url+'>'+ view_news +'</a>'
                        },
                    }],
                }).ajax.reload();
                
                break;
            case '2':
                if(!subject) {
                    $('#news').DataTable({
                        processing: false,
                        serverSide: false,
                        paging: false,
                        searching: false,
                        ajax: {
                            url: route_top_headlines_sources,
                            type: 'POST',
                            data: {
                                'category': $('.category').val(),
                                'language': $('.language').val(),
                                'country': $('.country').val()
                            },
                            dataSrc: function ( json ) {
                                return json.sources;
                            },
                            error: function(jqXHR, exception, error) {
                                if(jqXHR.status) {
                                    let msgError = jqXHR.responseJSON.message.split("\"message\":\"");
                                    
                                    swal.fire({
                                        toast: true,
                                        position: 'bottom-end',
                                        showConfirmButton: false,
                                        timer: 6000,
                                        background: '#e74c3c',
                                        icon: 'error',
                                        timerProgressBar: true,
                                        customClass: {
                                            title: 'text-white'
                                        },
                                        title: msgError[1]
                                    });
                                }
                            },
                        },
                        columns: [
                            {data: ''},
                            {data: 'description'},
                            {data: ''},
                            {data: ''}
                        ],
                        columnDefs:[{
                            targets:3, 
                            data:"url", 
                            "render": function(data,type,full,meta){ 
                                return '<a class="btn btn-primary" target="_blank" href='+data.url+'>'+ view_news +'</a>'
                            },
                        }],
                    }).ajax.reload();

                    break;
                }

                $('#news').DataTable({
                    processing: false,
                    serverSide: false,
                    paging: false,
                    searching: false,
                    ajax: {
                        url: route_top_headlines,
                        type: 'POST',
                        data: {
                            'q': $('.subject').val(),
                            'country': $('.country').val(),
                            'category': $('.category').val(),
                        },
                        dataSrc: function ( json ) {
                            return json.sources;
                        },
                        error: function(jqXHR, exception, error) {
                            if(jqXHR.status) {
                                let msgError = jqXHR.responseJSON.message.split("\"message\":\"");
                                
                                swal.fire({
                                    toast: true,
                                    position: 'bottom-end',
                                    showConfirmButton: false,
                                    timer: 6000,
                                    background: '#e74c3c',
                                    icon: 'error',
                                    timerProgressBar: true,
                                    customClass: {
                                        title: 'text-white'
                                    },
                                    title: msgError[1]
                                });
                            }
                        },
                    },
                    columns: [
                        {data: ''},
                        {data: 'description'},
                        {data: ''},
                        {data: null}
                    ],
                    columnDefs:[{
                        targets:3, 
                        data:"url", 
                        "render": function(data,type,full,meta){ 
                            return '<a class="btn btn-primary" target="_blank" href='+data.url+'>'+ view_news +'</a>'
                        },
                    }],
                }).ajax.reload();

                break;
            default:
                swal.fire({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 6000,
                    background: '#e74c3c',
                    icon: 'error',
                    timerProgressBar: true,
                    customClass: {
                        title: 'text-white'
                    },
                    title: requiredReference
                });
                break;
        }

        $('.text-default-btn').removeClass('d-none');
        $('.effect-btn, .text-spinner-button').addClass('d-none'); 
    })
})