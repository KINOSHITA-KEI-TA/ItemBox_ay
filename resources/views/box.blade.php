<div>
<div class="container small">
  <h1>PCを登録</h1>
  <form action="{{ route('post.store') }}" method="POST">
  @csrf
    <fieldset>
        <div class="form-group">
        <label for="post">{{ __('PC機種名') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_PC" id="box_PC">
                <option value="DELL Latiude3520">DELL Latiude3520</option>
                <option value="DELL Vostro5310">DELL Vostro5310</option>
                <option value="DELL VOSTRO5581">DELL VOSTRO5581</option>
                <option value="DELL VOSTRO3500">DELL VOSTRO3500</option>
                <option value="DELL LATIE5540">DELL LATIE5540</option>
                <option value="DELL LatiudeE5540">DELL LatiudeE5540</option>
                <option value="XPS13プレミアム">XPS13プレミアム</option>
                <option value="DELL LATIE5540">DELL LATIE5540</option>
                <option value="DELL Optiplex3090">DELL Optiplex3090</option>
                <option value="DELL Optiplex3080">DELL Optiplex3080</option>
                <option value="DELL Optiplex 3050">DELL Optiplex3050</option>
                <option value="DELL Optiplex3020">DELL Optiplex3020</option>
                <option value="HP DESK 600G3SFF">HP DESK 600G3SFF</option>
            </select>
            <label for="post">{{ __('種類') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_type" id="box_PC">
                <option value="デスクトップ">デスクトップ</option>
                <option value="ノートPC">ノートPC</option>
            </select>
            <label for="book_name">{{ __('部署') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <select name="box_group" id="book_name">
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
            <input type="text" class="form-control" name="box_id" id="book_name">
            <label for="book_name">{{ __('名前') }}<span class="badge badge-danger ml-2">{{ __('≪必須≫') }}</span></label>
            <input type="text" class="form-control" name="box_name" id="book_name">
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
<div>
<h2>備品管理</h2>
<h3>本社</h3>
<table>
<th>PC機種名</th>
<th>種類</th>
<th>ユーザーID</th>
<th>部署</th>
<th>名前</th>
@foreach($posts as $post)
@if($post['box_group'] === "本社")
<tr>
<td>{{$post->box_PC}}</td>
<td>{{$post->box_type}}</td>
<td>{{$post->box_id}}</td>
<td>{{$post->box_group}}</td>
<td>{{$post->box_name}}</td>
</tr>
@endif
@endforeach
</table>
<h3>経理部</h3>
<table>
<th>PC機種名</th>
<th>種類</th>
<th>ユーザーID</th>
<th>部署</th>
<th>名前</th>
@foreach($posts as $post)
@if($post['box_group'] === "経理部")
<tr>
<td>{{$post->box_PC}}</td>
<td>{{$post->box_type}}</td>
<td>{{$post->box_id}}</td>
<td>{{$post->box_group}}</td>
<td>{{$post->box_name}}</td>
</tr>
@endif
@endforeach
</table>
</div>
<!-- <th>本社＜事務所＞</th>
<th>第五工場＜工場＞</th>
<th>第一工場＜事務所＞</th>
<th>第一工場＜工場＞</th>
<th>第二工場＜事務所＞</th>
<th>第二工場＜工場＞</th>
<th>第三工場＜事務所＞</th>
<th>第三工場＜工場＞</th>
<th>第四工場＜事務所＞</th>
<th>第四工場＜工場＞</th>
<th>余り</th> -->