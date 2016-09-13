
<div id="chat">
    <div class="container">
        <div class="row chat-window col-xs-11 col-sm-5 col-md-4 col-lg-3" id="chat_window_1" style="margin-left:10px;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-7">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Soporte</h3>
                        </div>
                        <div class="col-md-4 col-xs-5" style="text-align: right;">
                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                        </div>
                    </div>
                    <div id="chat_content" class="panel-body msg_container_base">

                    </div>
                    <div class="panel-footer">
                        <form class="form" id="form">
                            <div class="input-group">
                                <input autocomplete="off" id="m" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje" />
                                <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat">Enviar</button>
                                </span>
                            </div>
                            <input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


