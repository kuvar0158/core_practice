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
        $this->hasOne('App\Phone')->where('status', config('offlod.invoice.due'))->latest();
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

======================many to many relatinships===================================

refrence link-: https://www.itsolutionstuff.com/post/laravel-many-to-many-eloquent-relationship-tutorialexample.html

Many to many relationship is a little bit complicated than one to one and one to many relationships. An example of such a relationship is a user with may have multiple roles, where the role are also connected with multiple users.

Table-:users     Table-: roles     Table-: role_user 
id  (Pk)         id                 user_id (FK)
name             name               role_id (FK)
email
password      

class User extends Authenticatable
{
    use Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
class Role extends Model
{
    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}

class UserRole extends Model
{
     
}

$user = User::find(1);  
 
dd($user->roles);

$role = Role::find(1);  
 
dd($role->users);

create records-:

$user = User::find(2);  
 
$roleIds = [1, 2];
$user->roles()->attach($roleIds);


==============================Eloquent ORM==================================
refrence link-: https://laravel.com/docs/5.0/eloquent#query-scopes

Query Scopes
Defining A Query Scope

class User extends Model {

    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    public function scopeWomen($query)
    {
        return $query->whereGender('W');
    }

}

Utilizing A Query Scope
$users = User::popular()->women()->orderBy('created_at')->get();

====================Accessors & Mutators =================
Note-: here first_name is your collumn name (snake_case)
class User extends Model {

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

}


==============================Attribute Casting========================================
If you have some attributes that you want to always convert to another data-type, you may add the attribute to the casts property of your model

protected $casts = [
    'is_admin' => 'boolean',
];

=======================Converting A Model To JSON========================================
Ex-:
return User::find(1)->toJson();