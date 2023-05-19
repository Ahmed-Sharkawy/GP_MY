@extends('frontend.layout.main')

@section('main')
    <!-- start book  -->
    <div class="book" id="book">
        <h2 class="main-title">تواصل معنا</h2>
        <div class="container">
            <div class="discount" id="discount">
                <div class="form">
                    <div class="content">
                        <form action="#">
                            <input type="text" name="name" class="input" placeholder="اسمك" required>
                            <input type="email" name="email" class="input" placeholder="عنوان الرحلة"  required>
                            <input type="number" name="" class="input"  placeholder="الرقم" required>
                            <textarea name="message" class="input" placeholder="أخبرنا عن احتياجاتك"></textarea>
                            <!--حط لينك ال باي بال فال href -->
                            <a href="#"><input type="submit" value="ارسال"></a>
                        </form>
                    </div>
                </div>
                <div class="img ">
                    <div class="content rounded">
                        <h2>تواصل معنا</h2>
                        <p>لا تتردد في التواصل معنا فنحن في انتظارك دائما قم بعرض علينا مقترحاتك وشكوتك وسوف نتواصل معك في خلال 24 ساعة</p>
                        <img class="" src="{{ asset('frontend/img/discount.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
