<div>
<h1>編集画面</h1>
<form action="{{ route('box.update',$post->id)}}" method="POST">
  @csrf
    <fieldset>
        <div class="form-group">
        <label for="post">{{ __('PC機種名') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_PC" id="box_PC" value="{{old('box_PC')?: $post->box_PC}}">
                <option value="DELL Latiude3520" {{ "DELL Latiude3520" == $post->box_PC ? 'selected' : '' }}>DELL Latiude3520</option>
                <option value="DELL Vostro5310" {{ "DELL Vostro5310" == $post->box_PC ? 'selected' : '' }}>DELL Vostro5310</option>
                <option value="DELL VOSTRO5581" {{ "DELL VOSTRO5581" == $post->box_PC ? 'selected' : '' }}>DELL VOSTRO5581</option>
                <option value="DELL VOSTRO3500" {{ "DELL VOSTRO3500" == $post->box_PC ? 'selected' : '' }}>DELL VOSTRO3500</option>
                <option value="DELL LATIE5540" {{ "DELL LATIE5540" == $post->box_PC ? 'selected' : '' }}>DELL LATIE5540</option>
                <option value="DELL LatiudeE5540" {{ "DELL LatiudeE5540" == $post->box_PC ? 'selected' : '' }}>DELL LatiudeE5540</option>
                <option value="XPS13プレミアム" {{ "XPS13プレミアム" == $post->box_PC ? 'selected' : '' }}>XPS13プレミアム</option>
                <option value="DELL LATIE5540" {{ "DELL LATIE5540" == $post->box_PC ? 'selected' : '' }}>DELL LATIE5540</option>
                <option value="DELL Optiplex3090" {{ "DELL Optiplex3090" == $post->box_PC ? 'selected' : '' }}>DELL Optiplex3090</option>
                <option value="DELL Optiplex3080" {{ "DELL Optiplex3080" == $post->box_PC ? 'selected' : '' }}>DELL Optiplex3080</option>
                <option value="DELL Optiplex 3050" {{ "DELL Optiplex 3050" == $post->box_PC ? 'selected' : '' }}>DELL Optiplex3050</option>
                <option value="DELL Optiplex3020" {{ "DELL Optiplex3020" == $post->box_PC ? 'selected' : '' }}>DELL Optiplex3020</option>
                <option value="HP DESK 600G3SFF" {{ "HP DESK 600G3SFF" == $post->box_PC ? 'selected' : '' }}>HP DESK 600G3SFF</option>
            </select>
            <label for="post">{{ __('種類') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_type" id="box_PC" value="{{old('box_type')?: $post->box_type}}">
                <option value="デスクトップ" {{ "デスクトップ" == $post->box_type ? 'selected' : '' }}>デスクトップ</option>
                <option value="ノートPC" {{ "ノートPC" == $post->box_type ? 'selected' : '' }}>ノートPC</option>
            </select>
            <label for="book_name">{{ __('部署') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_group" id="book_name"value="{{old('box_group')?: $post->box_group}}">
                <option value="本社">本社</option>
                <option value="製造部">製造部</option>
                <option value="第一工場">第一工場</option>
                <option value="第二工場">第二工場</option>
                <option value="第三工場">第三工場</option>
                <option value="第四工場">第四工場</option>
                <option value="第五工場">第五工場</option>
                <option value="生産技術課">生産技術課</option>
                <option value="品質管理部">品質管理部</option>
                <option value="人事総務部">人事総務部</option>
                <option value="経理部">経理部</option>
                <option value="営業開発部">営業開発部</option>
                <option value="営業課">営業課</option>
                <option value="商品開発課">商品開発課</option>
                <option value="購買課">購買課</option>
                <option value="生産管理課">生産管理課</option>
                <option value="プレゼン_商談室">プレゼン室 / 商談室</option>
                <option value="余り">余り</option>
            </select>
            <label for="book_name">{{ __('ユーザーID') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <input type="text" class="form-control" name="box_id" id="book_name" value="{{old('box_id')?: $post->box_id}}">
            <label for="book_name">{{ __('名前') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <input type="text" class="form-control" name="box_name" id="book_name" value="{{old('box_name')?: $post->box_name}}">
        <div class="d-flex justify-content-between pt-3">
            <a href="" class="btn btn-outline-secondary" role="button">
                <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('一覧画面へ') }}
            </a>
            <button type="submit" class="btn btn-success">
                {{ __('登録') }}
            </button>
        </div>
    </fieldset>
  </form>
</div>
</div>