@extends('frontend.layout.main')

@section('main')
    <div class="salla" id="salla">
        <h2 class="main-title"> سلة المشتريات</h2>

        <div class="container">
            <div id="deleteAll"></div>
            <table>
                <thead>
                    <tr>
                        <th> رقم الرحلة</th>
                        <th>عنوان الرحلة</th>
                        <th>السعر</th>
                        <th>المدة</th>
                        <th>شراء</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr>
                        <td>15286</td>
                        <td>الغردقة</td>
                        <td>1500</td>
                        <td>3 ايام</td>
                        <td><button class="btn btn-success">شراء</button></td>
                        <td><button class="btn btn-danger">حذف</button></td>contact
                    </tr>
                    <tr>
                        <td>7599</td>
                        <td>شرم الشيخ</td>
                        <td>6254</td>
                        <td>7 ايام</td>
                        <td><button class="btn btn-success">شراء</button></td>
                        <td><button class="btn btn-danger">حذف</button></td>
                    </tr>
                    <tr>
                        <td>8544</td>
                        <td>الاقصر</td>
                        <td>7000</td>
                        <td>10 ايام</td>
                        <td><button class="btn btn-success">شراء</button></td>
                        <td><button class="btn btn-danger">حذف</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
