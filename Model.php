<?php

namespace App;

/**
 * @method static $this make(array $attributes = array()) Find a model by its primary key.
 * @method static $this withGlobalScope(string $identifier, \Illuminate\Database\Eloquent\Scope|\Closure $scope) Find a model by its primary key.
 * @method static $this withoutGlobalScope(\Illuminate\Database\Eloquent\Scope|string $scope) Find a model by its primary key.
 * @method static $this withoutGlobalScopes(array|null $scopes = null) Find a model by its primary key.
 * @method static array removedScopes() Find a model by its primary key.
 * @method static $this whereKey(mixed $id) Find a model by its primary key.
 * @method static $this whereKeyNot(mixed $id) Find a model by its primary key.
 * @method static $this where(string|array|\Closure $column, string $operator = null, mixed $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhere(\Closure|array|string $column, string $operator = null, mixed $value = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Collection hydrate(array $items) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Collection fromQuery(string $query, array $bindings = array()) Find a model by its primary key.
 * @method static $this|\Illuminate\Database\Eloquent\Collection|static[]|static|null find(mixed $id, array $columns = array()) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Collection findMany(\Illuminate\Contracts\Support\Arrayable|array $ids, array $columns = array()) Find a model by its primary key.
 * @method static $this|\Illuminate\Database\Eloquent\Collection findOrFail(mixed $id, array $columns = array()) Find a model by its primary key.
 * @method static $this findOrNew(mixed $id, array $columns = array()) Find a model by its primary key.
 * @method static $this firstOrNew(array $attributes, array $values = array()) Find a model by its primary key.
 * @method static $this firstOrCreate(array $attributes, array $values = array()) Find a model by its primary key.
 * @method static $this updateOrCreate(array $attributes, array $values = array()) Find a model by its primary key.
 * @method static $this|static firstOrFail(array $columns = array()) Find a model by its primary key.
 * @method static $this|static|mixed firstOr(\Closure|array $columns = array(), \Closure|null $callback = null) Find a model by its primary key.
 * @method static mixed value(string $column) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Collection|static[] get(array $columns = array()) Find a model by its primary key.
 * @method static $this[] getModels(array $columns = array()) Find a model by its primary key.
 * @method static array eagerLoadRelations(array $models) Find a model by its primary key.
 * @method static \Generator cursor() Find a model by its primary key.
 * @method static bool chunkById(int $count, callable $callback, string $column = null, string|null $alias = null) Find a model by its primary key.
 * @method static \Illuminate\Support\Collection pluck(string $column, string|null $key = null) Find a model by its primary key.
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage = null, array $columns = array(), string $pageName = 'page', int|null $page = null) Find a model by its primary key.
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate(int $perPage = null, array $columns = array(), string $pageName = 'page', int|null $page = null) Find a model by its primary key.
 * @method static $this|$this create(array $attributes = array()) Find a model by its primary key.
 * @method static $this|$this forceCreate(array $attributes) Find a model by its primary key.
 * @method static void onDelete(\Closure $callback) Find a model by its primary key.
 * @method static mixed scopes(array $scopes) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static applyScopes() Find a model by its primary key.
 * @method static $this without(mixed $relations) Find a model by its primary key.
 * @method static $this newModelInstance(array $attributes = array()) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder getQuery() Find a model by its primary key.
 * @method static $this setQuery(\Illuminate\Database\Query\Builder $query) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder toBase() Find a model by its primary key.
 * @method static array getEagerLoads() Find a model by its primary key.
 * @method static $this setEagerLoads(array $eagerLoad) Find a model by its primary key.
 * @method static $this getModel() Find a model by its primary key.
 * @method static $this setModel(\Illuminate\Database\Eloquent\Model $model) Find a model by its primary key.
 * @method static \Closure getMacro(string $name) Find a model by its primary key.
 * @method static bool chunk(int $count, callable $callback) Find a model by its primary key.
 * @method static bool each(callable $callback, int $count = '1000') Find a model by its primary key.
 * @method static $this|static|null first(array $columns = array()) Find a model by its primary key.
 * @method static mixed when(mixed $value, callable $callback, callable $default = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder tap(\Closure $callback) Find a model by its primary key.
 * @method static mixed unless(mixed $value, callable $callback, callable $default = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static has(string $relation, string $operator = '>=', int $count = '1', string $boolean = 'and', \Closure|null $callback = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static orHas(string $relation, string $operator = '>=', int $count = '1') Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static doesntHave(string $relation, string $boolean = 'and', \Closure|null $callback = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static orDoesntHave(string $relation) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static whereHas(string $relation, \Closure|null $callback = null, string $operator = '>=', int $count = '1') Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = '1') Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static whereDoesntHave(string $relation, \Closure|null $callback = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereDoesntHave(string $relation, \Closure $callback = null) Find a model by its primary key.
 * @method static $this withCount(mixed $relations) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Builder|static mergeConstraintsFrom(\Illuminate\Database\Eloquent\Builder $from) Find a model by its primary key.
 * @method static $this select(array|mixed $columns = array()) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static selectRaw(string $expression, array $bindings = array()) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static selectSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as) Find a model by its primary key.
 * @method static $this addSelect(array|mixed $column) Find a model by its primary key.
 * @method static $this distinct() Find a model by its primary key.
 * @method static $this from(string $table) Find a model by its primary key.
 * @method static $this join(string $table, string $first, string|null $operator = null, string|null $second = null, string $type = 'inner', bool $where = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static joinWhere(string $table, string $first, string $operator, string $second, string $type = 'inner') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static leftJoin(string $table, string $first, string|null $operator = null, string|null $second = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static leftJoinWhere(string $table, string $first, string $operator, string $second) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static rightJoin(string $table, string $first, string|null $operator = null, string|null $second = null) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static rightJoinWhere(string $table, string $first, string $operator, string $second) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static crossJoin(string $table, string|null $first = null, string|null $operator = null, string|null $second = null) Find a model by its primary key.
 * @method static void mergeWheres(array $wheres, array $bindings) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereColumn(string|array $first, string|null $operator = null, string|null $second = null) Find a model by its primary key.
 * @method static $this whereRaw(string $sql, mixed $bindings = array(), string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereRaw(string $sql, mixed $bindings = array()) Find a model by its primary key.
 * @method static $this whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereIn(string $column, mixed $values) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereNotIn(string $column, mixed $values, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotIn(string $column, mixed $values) Find a model by its primary key.
 * @method static $this whereNull(string $column, string $boolean = 'and', bool $not = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNull(string $column) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereNotNull(string $column, string $boolean = 'and') Find a model by its primary key.
 * @method static $this whereBetween(string $column, array $values, string $boolean = 'and', bool $not = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereBetween(string $column, array $values) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereNotBetween(string $column, array $values, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotBetween(string $column, array $values) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotNull(string $column) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereDate(string $column, string $operator, mixed $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereDate(string $column, string $operator, string $value) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereTime(string $column, string $operator, int $value, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereTime(string $column, string $operator, int $value) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereDay(string $column, string $operator, mixed $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereMonth(string $column, string $operator, mixed $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereYear(string $column, string $operator, mixed $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereNested(\Closure $callback, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder forNestedWhere() Find a model by its primary key.
 * @method static $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and') Find a model by its primary key.
 * @method static $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereExists(\Closure $callback, bool $not = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static whereNotExists(\Closure $callback, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotExists(\Closure $callback) Find a model by its primary key.
 * @method static $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = '') Find a model by its primary key.
 * @method static $this dynamicWhere(string $method, string $parameters) Find a model by its primary key.
 * @method static $this groupBy(array $groups = null) Find a model by its primary key.
 * @method static $this having(string $column, string|null $operator = null, string|null $value = null, string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orHaving(string $column, string|null $operator = null, string|null $value = null) Find a model by its primary key.
 * @method static $this havingRaw(string $sql, array $bindings = array(), string $boolean = 'and') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static orHavingRaw(string $sql, array $bindings = array()) Find a model by its primary key.
 * @method static $this orderBy(string $column, string $direction = 'asc') Find a model by its primary key.
 * @method static $this orderByDesc(string $column) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static latest(string $column = 'created_at') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static oldest(string $column = 'created_at') Find a model by its primary key.
 * @method static $this inRandomOrder(string $seed = '') Find a model by its primary key.
 * @method static $this orderByRaw(string $sql, array $bindings = array()) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static skip(int $value) Find a model by its primary key.
 * @method static $this offset(int $value) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static take(int $value) Find a model by its primary key.
 * @method static $this limit(int $value) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static forPage(int $page, int $perPage = '15') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static forPageAfterId(int $perPage = '15', int $lastId = '0', string $column = 'id') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static union(\Illuminate\Database\Query\Builder|\Closure $query, bool $all = '') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder|static unionAll(\Illuminate\Database\Query\Builder|\Closure $query) Find a model by its primary key.
 * @method static $this lock(string|bool $value = '1') Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder lockForUpdate() Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Builder sharedLock() Find a model by its primary key.
 * @method static string toSql() Find a model by its primary key.
 * @method static int getCountForPagination(array $columns = array()) Find a model by its primary key.
 * @method static string implode(string $column, string $glue = '') Find a model by its primary key.
 * @method static bool exists() Find a model by its primary key.
 * @method static int count(string $columns = '*') Find a model by its primary key.
 * @method static mixed min(string $column) Find a model by its primary key.
 * @method static mixed max(string $column) Find a model by its primary key.
 * @method static mixed sum(string $column) Find a model by its primary key.
 * @method static mixed avg(string $column) Find a model by its primary key.
 * @method static mixed average(string $column) Find a model by its primary key.
 * @method static mixed aggregate(string $function, array $columns = array()) Find a model by its primary key.
 * @method static float|int numericAggregate(string $function, array $columns = array()) Find a model by its primary key.
 * @method static bool insert(array $values) Find a model by its primary key.
 * @method static int insertGetId(array $values, string|null $sequence = null) Find a model by its primary key.
 * @method static bool updateOrInsert(array $attributes, array $values = array()) Find a model by its primary key.
 * @method static void truncate() Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value) Find a model by its primary key.
 * @method static array getBindings() Find a model by its primary key.
 * @method static array getRawBindings() Find a model by its primary key.
 * @method static $this setBindings(array $bindings, string $type = 'where') Find a model by its primary key.
 * @method static $this addBinding(mixed $value, string $type = 'where') Find a model by its primary key.
 * @method static $this mergeBindings(\Illuminate\Database\Query\Builder $query) Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor() Find a model by its primary key.
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar() Find a model by its primary key.
 * @method static $this useWritePdo() Find a model by its primary key.
 * @method static static cloneWithout(array $properties) Find a model by its primary key.
 * @method static static cloneWithoutBindings(array $except) Find a model by its primary key.
 * @method static void macro(string $name, object|callable $macro) Find a model by its primary key.
 * @method static void mixin(object $mixin) Find a model by its primary key.
 * @method static bool hasMacro(string $name) Find a model by its primary key.
 * @method static mixed macroCall(string $method, array $parameters) Find a model by its primary key.
 */

abstract class Model extends \Illuminate\Database\Eloquent\Model
{

}