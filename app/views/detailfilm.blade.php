@extends('main')

@section('content')
 <div class="maincontent container-fluid" style="clear:both">
            <div class="row">
                <div class="col-md-12" id="film-detail">
                    <div class="row">
                        <div class="col-md-7 film-video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/JUgtBFFlejI" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-5 film-content">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <a href="#">
                                        <img src="{{url('frontend/images/hau-due-cua-mat-trois.jpg')}}" style="width: 100px;height: auto;max-width: 100%;" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <p><a href="#" class="title-vn">Anh Hùng Nhà Bên (2016)</a></p>
                                    <p>Neighborhood Hero</p>
                                    <p>Thời lượng: 16 Tập</p>
                                    <p>Lượt Xem: 58,080</p>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="description">
                                        Phim London Has Fallen (2016) diễn ra hai năm sau một sự kiện bi thảm tại một đất nước hồi giáo, trở lại với Washington D.C., Mike Banning (Gerard Butler) và vợ Leah (Radha Mitchell) đang háo hức chờ đợi sự ra đời của đứa con đầu lòng. Tuy nhiên với vị trí là Đặc vụ bảo vệ Tổng thống Asher (Aaron Eckhart), Banning luôn sẵn sàng nhận nhiệm vụ. Khi Thủ tướng Anh đột ngột qua đời, Banning cùng với Giám đốc Sở Mật vụ Lynne Jacobs (Angela Bassett) đồng hành với Tổng thống tới lễ tang cấp quốc gia của Thủ tướng Anh tại nhà thờ St Paul ở London.
                                        Với sự tham dự của hầu hết các lãnh đạo trên thế giới, tang lễ là sự kiện được bảo vệ cẩn mật nhất. Tuy nhiên, khi đang trên đường tới tang lễ, các vị lãnh đạo của các nước đều bị ám sát và các vị trí trọng yếu của London bị tấn công. Tổng thống Asher, Banning và Jacobs đã bị phục kích và buộc phải rút lui trong làn mưa bom đạn lửa. Thủ đô của Anh bị phong tỏa, toàn bộ hệ thống thông tin liên lạc bị cắt đứt. Banning phải tận dụng mọi kinh nghiệm cũng như kỹ năng mình đã có để bảo vệ sự an toàn của Tổng thống dù với bất cứ giá nào.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
 @endsection
