@component('admin.layouts.content',['title' => 'ویرایش محصول'])
    @slot('breadcrumb')

        <li class="breadcrumb-item"><a href="{{route('admin.admin')}}">داشبورد</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">لیست محصولات</a></li>
        <li class="breadcrumb-item active">ویرایش محصول</li>
    @endslot

    <!-- general form elements -->
    <div class="card card-primary col-12">
        <div class="card-header">
            <h3 class="card-title">ویرایش محصول</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div id="attributes" data-attributes="{{ json_encode(\App\Attribute::all()->pluck('name')) }}"></div>
        <form action="{{route('admin.products.update' , $product)}}" method="POST" role="form">
            @csrf
            @method('PATCH')
            <div class="card-body">
                @include('admin.layouts.errors')
                <div class="form-group ">
                    <label for="name">عنوان</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" >
                </div>
                <div class="form-group ">
                    <label for="description">توضیحات</label>
                    <textarea class="form-control"  name="description" id="description" >{{$product->description}}</textarea>
                </div>


                <div class="input-group align-items-center mt-lg-5">
                    <label for="image_label">تصویر محصول : </label>
                    <input type="text" id="image_label" class="form-control mr-3" name="image"
                           aria-label="Image" aria-describedby="button-image">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی ها</label>
                    <select class="form-control" name="categories[]" id="categories" multiple>
                        @foreach(\App\Category::all() as $category)
                            <option value="{{ $category->id }}"  {{ in_array($category->id , $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <h6>ویژگی محصول</h6>
                <hr>
                <div id="attribute_section">
                    @foreach($product->attributes as $attribute)
                        <div class="row" id="attribute-{{ $loop->index }}">
                            <div class="col-5">
                                <div class="form-group">
                                    <label>عنوان ویژگی</label>
                                    <select name="attributes[{{ $loop->index }}][name]" onchange="changeAttributeValues(event, {{ $loop->index }});" class="attribute-select form-control">
                                        <option value="">انتخاب کنید</option>
                                        @foreach(\App\Attribute::all() as $attr)
                                            <option value="{{ $attr->name }}" {{ $attr->name ==  $attribute->name ? 'selected' : '' }}>{{ $attr->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>مقدار ویژگی</label>
                                    <select name="attributes[{{ $loop->index }}][value]" class="attribute-select form-control">
                                        <option value="">انتخاب کنید</option>
                                        @foreach($attribute->values as $value)
                                            <option value="{{ $value->value }}" {{ $value->id  === $attribute->pivot->value_id ? 'selected' : '' }}>{{ $value->value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <label >اقدامات</label>
                                <div>
                                    <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-{{ $loop->index }}').remove()">حذف</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-sm btn-danger" type="button" id="add_product_attribute">ویژگی جدید</button>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ویرایش محصول</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    @slot('script')
        <script>


            document.addEventListener("DOMContentLoaded", function() {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }



            $('#categories').select2({
                'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
            })


            let changeAttributeValues = (event , id) => {
                let valueBox = $(`select[name='attributes[${id}][value]']`);


                //
                $.ajaxSetup({
                    headers : {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type' : 'application/json'
                    }
                })
                //
                $.ajax({
                    type : 'POST',
                    url : '/admin/attribute/values',
                    data : JSON.stringify({
                        name : event.target.value
                    }),
                    success : function(res) {
                        valueBox.html(`
                            <option value="" selected>انتخاب کنید</option>
                            ${
                            res.data.map(function (item) {
                                return `<option value="${item}">${item}</option>`
                            })
                        }
                        `);
                    }
                });
            }

            let createNewAttr = ({ attributes , id }) => {

                return `
                    <div class="row" id="attribute-${id}">
                        <div class="col-5">
                            <div class="form-group">
                                 <label>عنوان ویژگی</label>
                                 <select name="attributes[${id}][name]" onchange="changeAttributeValues(event, ${id});" class="attribute-select form-control">
                                    <option value="">انتخاب کنید</option>
                                    ${
                    attributes.map(function(item) {
                        return `<option value="${item}">${item}</option>`
                    })
                }
                                 </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                 <label>مقدار ویژگی</label>
                                 <select name="attributes[${id}][value]" class="attribute-select form-control">
                                        <option value="">انتخاب کنید</option>
                                 </select>
                            </div>
                        </div>
                         <div class="col-2">
                            <label >اقدامات</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-${id}').remove()">حذف</button>
                            </div>
                        </div>
                    </div>
                `
            }

            $('#add_product_attribute').click(function() {
                let attributesSection = $('#attribute_section');
                let id = attributesSection.children().length;

                let attributes = $('#attributes').data('attributes');

                attributesSection.append(
                    createNewAttr({
                        attributes,
                        id
                    })
                );

                $('.attribute-select').select2({ tags : true });
            });

            $('.attribute-select').select2({ tags : true });
        </script>
    @endslot


@endcomponent
