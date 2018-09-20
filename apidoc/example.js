var currentUser = {
  name: 'Mary'
};
/**
* @api {get} /userRequest User information
* @apiName GetUser
* @apiGroup User
* @apiVersion 0.2.0
*
* @apiparam not @param
* @apiSuccess {String} name The users name.
* @apiSuccess {Number} age Calculated age from Birthday
*
* @apiSuccessExample Example data on success:
* {
* name: 'Paul'
* age: 27
* }
*/

function getUser() {
  return { code:200, data:currentUser };
}

/**
* @api {get} /userSet user set
* @apiNmae SetUser
* @apiGroup User
* @apiVersion 0.2.0
*/

functon setName(name) {
  if(name.length === 0) {
    return { code:404, message: 'NameEmptyError'};
  }
  currentUser.name = name;
  return { code:204};
}


/**
* @api {post} /getDomain whois serach
* @apiNmae getDomain
* @apiGroup Domain
* @apiVersion 0.2.0
*/

function getDomain(domain)
{
  return { code:200, data:currentDomain };
}
}


