<div class="row mb-4">
    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pb-0">
                <h6 class="mb-0">Thông tin chung
                </h6>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-body p-3 pb-2">
                <div class="form-group mb-3 is-filled">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control form-control-lg" name="name" value="{{old('name', $post['name'])}}">
                    @if ($errors->has('name'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3 is-filled">
                    <label>Thể loại</label>
                    <select name="type" id="" class="form-control">
                        <option {{old('type', $post['type']) === 'bai_viet' ? 'selected' : ''}} value="bai_viet">Bài viết</option>
                        <option {{old('type', $post['type']) === 'tien_ich' ? 'selected' : ''}} value="tien_ich">Tiện ích</option>
                    </select>
                </div>
                <div class="form-group mb-3 is-filled">
                    <label>Hình ảnh</label>
                    <div class="upload_image" data-name="avatar">
                        <input type="hidden" class="avatar" name="avatar" value="{{old('avatar', $post['avatar'])}}">
                        <img src="{{$post['avatar'] ? old('avatar', $post['avatar']) : (old('avatar') ? old('avatar') : '/assets/img/department.jpg')}}" style="border: 1px dashed #b4b3ca; padding: 2px; height: 200px; width: 20%;" alt="" class="image-avatar">
                    </div>
                    @if ($errors->has('avatar'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('avatar')}}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3 is-filled">
                    <label>Mô tả</label>
                    <textarea  rows="5" cols="70" id="description" class="form-control"
                               name="description">{{old('content', $post['description'])}}</textarea>
                    @if ($errors->has('description'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3 is-filled">
                    <label>Nội dung</label>
                    <textarea  rows="5" cols="70" id="content" class="form-control content"
                               name="content">{{old('content', $post['content'])}}</textarea>
                    @if ($errors->has('content'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('content')}}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-2 text-center">
                <button type="submit" class="btn btn-primary mb-0">Lưu</button>
            </div>
        </div>
    </div>
</div>
