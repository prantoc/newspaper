<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\MenuItem;
use Share;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // Homepage-area
    public function index()
    {

        $data['postOne'] = Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->take(1)->get();
        $data['postTwo'] = Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->skip(1)->take(2)->get();
        $data['postThree'] = Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->skip(2)->take(3)->get();


        $data['cat'] = Category::whereOrder(1)->whereFrontpage(1)->first();
        $cat = Category::whereOrder(1)->whereFrontpage(1)->first();
        $pids = Category::where('parent_id', $cat->id)->orWhere('id', $cat->id)->pluck('id');
        $data['postFour'] = Post::whereIn('category_id',$pids)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();


        
        $data['posts'] = Post::orderby('id','desc')->take(12)->get();
        $data['latestPosts'] = Post::orderby('id','desc')->skip(12)->take(12)->get();
        $data['topPosts'] = Post::whereDate('created_at','=', Carbon::today())->orderBy('hit', 'desc')->get();

    
        $data['catTwo'] = Category::whereOrder(2)->whereFrontpage(1)->first();
        $catTwo = Category::whereOrder(2)->whereFrontpage(1)->first();
        if ($catTwo ) {
            $pidsTwo = Category::where('parent_id', $catTwo->id)->orWhere('id', $catTwo->id)->pluck('id');
            $data['postFiveSecOne'] = Post::whereIn('category_id',$pidsTwo)->whereStatus('PUBLISHED')->orderby('id','desc')->take(4)->get();
            $data['postFiveSecTwo'] = Post::whereIn('category_id',$pidsTwo)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(4)->take(7)->get();
        }
        

         

        $data['catThree'] = Category::whereOrder(3)->whereFrontpage(1)->first();
        $catThree = Category::whereOrder(3)->whereFrontpage(1)->first();
        if ($catThree) {
            $pidsThree = Category::where('parent_id', $catThree->id)->orWhere('id', $catThree->id)->pluck('id');
            $data['postSix'] = Post::whereIn('category_id',$pidsThree)->whereStatus('PUBLISHED')->orderby('id','desc')->take(5)->get();
        }
       

        $data['catFour'] = Category::whereOrder(4)->whereFrontpage(1)->first();
        $catFour = Category::whereOrder(4)->whereFrontpage(1)->first();
        if ($catFour) {
            $pidsFour = Category::where('parent_id', $catFour->id)->orWhere('id', $catFour->id)->pluck('id');
            $data['postSevenSecOne'] = Post::whereIn('category_id',$pidsFour)->whereStatus('PUBLISHED')->orderby('id','desc')->take(2)->get();
            $data['postSevenSecTwo'] = Post::whereIn('category_id',$pidsFour)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(2)->take(5)->get();
            $data['postSevenSecThree'] = Post::whereIn('category_id',$pidsFour)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(7)->take(5)->get();
        }



        $data['catFive'] = Category::whereOrder(5)->whereFrontpage(1)->first();
        $catFive = Category::whereOrder(5)->whereFrontpage(1)->first();
        if ($catFive) {
            $pidsFive = Category::where('parent_id', $catFive->id)->orWhere('id', $catFive->id)->pluck('id');
            $data['postAllSecOne'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->take(4)->get();
            $data['postAllSecTwo'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(4)->take(7)->get();

            $data['postCrickSecOne'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(53)->take(4)->get();
            $data['postCrickSecTwo'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(53)->skip(4)->take(7)->get();

            $data['postFootSecOne'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(54)->take(4)->get();
            $data['postFootSecTwo'] = Post::whereIn('category_id',$pidsFive)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(54)->skip(4)->take(7)->get();
        }
  

        $data['catSix'] = Category::whereOrder(6)->whereFrontpage(1)->first();
        $catSix = Category::whereOrder(6)->whereFrontpage(1)->first();
        if ($catSix) {
            $pidsSix = Category::where('parent_id', $catSix->id)->orWhere('id', $catSix->id)->pluck('id');
            $data['postNineSecOne'] = Post::whereIn('category_id',$pidsSix)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();
            $data['postNineSecTwo'] = Post::whereIn('category_id',$pidsSix)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(1)->take(2)->get();
        }



        $data['catSeven'] = Category::whereOrder(7)->whereFrontpage(1)->first();
        $catSeven = Category::whereOrder(7)->whereFrontpage(1)->first();
        if ($catSeven) {
            $pidsSeven = Category::where('parent_id', $catSeven->id)->orWhere('id', $catSeven->id)->pluck('id');

            $data['entertainAllSecOne'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();

            $data['entertainAllSecTwo'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(2)->take(2)->get();

            $data['entertainAllSecThree'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(3)->take(3)->get();

            $data['entertainAllSecFoure'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(6)->take(1)->get();

            $data['entertainAllSecFive'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(7)->take(2)->get();




            $data['dhlwodSecOne'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(60)->take(1)->get();

            $data['dhlwodSecTwo'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(60)->skip(2)->take(2)->get();

            $data['dhlwodSecThree'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(60)->skip(3)->take(3)->get();

            $data['dhlwodSecFoure'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(60)->skip(6)->take(1)->get();

            $data['dhlwodSecFive'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(60)->skip(7)->take(2)->get();


            

            $data['holwodSecOne'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(59)->take(1)->get();

            $data['holwodSecTwo'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(59)->skip(2)->take(2)->get();

            $data['holwodSecThree'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(59)->skip(3)->take(3)->get();

            $data['holwodSecFoure'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(59)->skip(6)->take(1)->get();

            $data['holwodSecFive'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(59)->skip(7)->take(2)->get();



            $data['bolwodSecOne'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(58)->take(1)->get();

            $data['bolwodSecTwo'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(58)->skip(2)->take(2)->get();

            $data['bolwodSecThree'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(58)->skip(3)->take(3)->get();

            $data['bolwodSecFoure'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(58)->skip(6)->take(1)->get();

            $data['bolwodSecFive'] = Post::whereIn('category_id',$pidsSeven)->whereStatus('PUBLISHED')->orderby('id','desc')->whereCategoryId(58)->skip(7)->take(2)->get();
        }
        



        $data['catEight'] = Category::whereOrder(8)->whereFrontpage(1)->first();
        $catEight = Category::whereOrder(8)->whereFrontpage(1)->first();
        if ($catEight) {
            $pidsEight = Category::where('parent_id', $catEight->id)->orWhere('id', $catEight->id)->pluck('id');
            $data['lifeSecOne'] = Post::whereIn('category_id',$pidsEight)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();
            $data['lifeSecTwo'] = Post::whereIn('category_id',$pidsEight)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(1)->take(2)->get();
        }


        $data['catNine'] = Category::whereOrder(9)->whereFrontpage(1)->first();
        $catNine = Category::whereOrder(9)->whereFrontpage(1)->first();
        if ($catNine) {
            $pidsNine = Category::where('parent_id', $catNine->id)->orWhere('id', $catNine->id)->pluck('id');
            $data['techSecOne'] = Post::whereIn('category_id',$pidsNine)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();
            $data['techSecTwo'] = Post::whereIn('category_id',$pidsNine)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(1)->take(2)->get();
        }


        $data['catTen'] = Category::whereOrder(10)->whereFrontpage(1)->first();
        $catTen = Category::whereOrder(10)->whereFrontpage(1)->first();
        if ($catTen) {
            $pidsTen = Category::where('parent_id', $catTen->id)->orWhere('id', $catTen->id)->pluck('id');
            $data['religionSecOne'] = Post::whereIn('category_id',$pidsTen)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();
            $data['religionSecTwo'] = Post::whereIn('category_id',$pidsTen)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(1)->take(2)->get();
        }


        $data['catEle'] = Category::whereOrder(11)->whereFrontpage(1)->first();
        $catEle = Category::whereOrder(11)->whereFrontpage(1)->first();
        if ($catEle) {
            $pidsEle = Category::where('parent_id', $catEle->id)->orWhere('id', $catEle->id)->pluck('id');
            $data['jobSecOne'] = Post::whereIn('category_id',$pidsEle)->whereStatus('PUBLISHED')->orderby('id','desc')->take(1)->get();
            $data['jobSecTwo'] = Post::whereIn('category_id',$pidsEle)->whereStatus('PUBLISHED')->orderby('id','desc')->skip(1)->take(2)->get();
        }

        return view('frontend.home',$data);
    }

    public function contact()
    {
       
        return view('frontend.contact-us');
    }
    public function termsOfUse()
    {
       
        return view('frontend.terms');
    }
    public function posts($slug)
    {

        $cat = Category::whereSlug($slug)->first();

        // $catId = $cat->id;
        if ($cat) {
            // code...
        $data['checkcatId'] = $cat->id;
        $data['cats'] = Category::whereId($cat->id)->get();

        $data['catTags'] = Category::whereParentId($cat->id)->get();
        }

        $post = Post::get();

        $data['featuredTopPosts'] = Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->take(1)->get();

        $data['featuredSidePosts'] = Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->skip(1)->take(2)->get();

        
        $data['allPosts'] = Post::whereStatus('PUBLISHED')->orderby('id','desc')->get();


         $date = Carbon::now()->subDays(7);

        $data['weeklyPosts'] = Post::whereStatus('PUBLISHED')->where('created_at', '>=', $date)->orderBy('hit', 'desc')->take(7)->get();

        // $data['weeklyPosts'] = Post::whereStatus('PUBLISHED')->whereDate('created_at','!=', Carbon::today())->orderBy('hit', 'desc')->take(7)->get();

        return view('frontend.posts', $data);
    }
    public function singlePost($slug, Request $request)
    {
        $pid = Post::whereSlug($slug)->first();

        $shareslug = $pid->slug;
        $sharetitle = $pid->title;

        $post = Post::findOrFail($pid->id);

        $domain = $request->fullUrl();
        // $domainname = $domain.$shareslug;

        $post['hit'] = $post->hit + 1;

        $post->save(); 

        $data['singlePost'] =Post::findOrFail($pid->id);

        $catId = Category::findOrFail($pid->category_id);

        if ($pid->category_id == $catId->id) {
            $data['cat'] = Category::findOrFail($catId->id);
        $cpid= Category::findOrFail($catId->id);
        $cpname = $cpid->name;
        $data['morePosts'] = Post::where('slug', '!=', $slug)->whereCategoryId($catId->id)->whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->take(9)->get();

        $data['socialshare'] = Share::page($domain, $sharetitle)
        ->facebook()
        ->twitter()
        ->whatsapp()->getRawLinks();

        $data['menus'] = MenuItem::whereTitle($cpname)->get();
        }

        else{
        
        $data['cat'] = Category::findOrFail($catId->parent_id);
        $cpid= Category::findOrFail($catId->parent_id);
        $cpname = $cpid->name;
        $data['morePosts'] = Post::where('slug', '!=', $slug)->whereCategoryId($catId->id)->whereStatus('PUBLISHED')->whereFeatured(1)->orderby('id','desc')->take(9)->get();

        $data['socialshare'] = Share::page($domain, $sharetitle)
        ->facebook()
        ->twitter()
        ->whatsapp()->getRawLinks();

        $data['menus'] = MenuItem::whereTitle($cpname)->get();
    }
        return view('frontend.single-post', $data);
    }
    public function tag($slug, Request $request)
    {
        $tag = Category::whereSlug($slug)->first();
        $data['tagName'] = $tag->name;
        $sharename = $tag->name;
        $data['tagDesc'] = $tag->description;
        $data['tagPost'] = Post::whereCategoryId($tag->id)->get();

        $domain = $request->fullUrl();
        $data['socialshare'] = Share::page($domain, $sharename)
        ->facebook()
        ->twitter()
        ->whatsapp()->getRawLinks();
        return view('frontend.tag', $data);
    }


     public function latestNews()
        {
            $data['search'] = 0;
            $data['latest'] = 1;
            $data['allPosts'] = Post::whereStatus('PUBLISHED')->whereDate('created_at','=', Carbon::today())->orderby('id','desc')->get();
            $data['topPosts'] = Post::whereStatus('PUBLISHED')->orderby('hit','desc')->get();
            return view('frontend.latest', $data);
        }




    // search-functionality

    public function search(Request $request){

        $data['search'] = 1;
        $data['latest'] = 0;
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table

        if ($search != '') {
            
        $data['allPosts'] = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('body', 'LIKE', "%{$search}%")->get();
        }


        // Return the search view with the resluts compacted
        return view('frontend.latest', $data);
    }   
}
