==================--------laravel relationship link of itsolutions============--------
refrence link-: https://www.itsolutionstuff.com/post/laravel-eloquent-relationships-tutorial-from-scratchexample.html

=====================-type of relationship in laravel-================================

1) One to One Relationship

2) One to Many Relationship

3) Many to Many Relationship

4) Has Many Thrugh Relationship

5) One to Many Polymorphic

6) Many to Many Polymorphic

===================One to One Relationship===================================

suppose each users have one phone number only then this relationship is estblished

Note -: (In which table have foreign key than make always belongs relations.)

Table-:users     Table-: phones
id  (Pk)         id          
name             user_id(FK)
email            phone

App Models

class User extends model{  
	public function phone()
    {
        return $this->hasOne('App\Phone');
    }
} 

class phone extends model{
	public function user()
    {
        return $this->belongsTo('App\User');
    }
} 

Retrieve Records:

$phone = User::find(1)->phone;
dd($phone);
dd($phone->user->name)
$user = Phone::find(1)->user;
dd($user)
$user = User::find(1);
$phone = new Phone;
$phone->phone = '9429343852';
 
$user->phone()->save($phone);
=========================one to many relationship==========================

refrence link-: https://www.itsolutionstuff.com/post/laravel-one-to-many-eloquent-relationship-tutorialexample.html

suppose each post have many comments then this relationship is estblished

Table-:posts     Table-: comments
id  (Pk)         id          
name             post_id(FK)
description      comment

class Post extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

class Comment extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
Retrieve Records:
$post = Post::find(1);
$comments = $post->comments;
dd($comments);
$comment = Comment::find(1);
$post = $comment->post;
dd($post);