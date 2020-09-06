<?php
namespace App\Http\Services;

use App\AcademicGroup;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class AcademicGroupService
{
    /**
     *  Function return active staffs no active group
     * @param int $groupId no archive group
     * @return Collection staffs
     * @throws Exception
     */
    public static function getActiveStaffs(int $groupId): Collection
    {
        /** @var AcademicGroup $group */
        $group = AcademicGroup::findOrFail($groupId);
        if($group->archive) throw new Exception("GroupIdIsArchiveGroup");

        return $group->staffs()->where('staffs.active', 1)->get();
    }
}
