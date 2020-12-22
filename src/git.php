<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/17   17:33
 */

namespace bydls\git;


use bydls\git\shell\branch;
use bydls\git\shell\tag;

class git
{

    /**获取git分支列表
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:18
     */
    public static function getGitBranchList()
    {
        $branch = new branch();
        $branch->branchList();
        return $branch->getResult();
    }

    /**切换分支
     * @param String $branch
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:16
     */
    public static function changeBranch(String $branch)
    {
        $branch = new branch();
        $branch->changeBranch($branch);
        return $branch->getResult();
    }

    /**获取当前分支
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:17
     */
    public static function getBranchNow()
    {
        $branch = new branch();
        $branch->getBranchNow();
        $now=$branch->getResult();
        return $now[0]??'';
    }


    /**获取分支下的标签列表
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:20
     */
    public static function getTagList()
    {
        $branch = new tag();
        $branch->tagList();
        return $branch->getResult();
    }


    /**切换标签
     * @param String $tag
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:20
     */
    public static function changeTag(String $tag)
    {
        $branch = new tag();
        $branch->changeTag($tag);
        return $branch->getResult();
    }

    /**获取本地最新标签
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/18   16:23
     */
    public static function getTagNew()
    {
        $branch = new tag();
        $branch->getTagNew();
        return $branch->getResult();
    }

    /**获取当前标签
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/22   10:19
     */
    public static function getTagNow()
    {
        $branch = new tag();
        $branch->getTagNow();
        $now=$branch->getResult();
        return $now[0]??'';
    }

    /**拉取最新标签到本地但不切换
     * @return mixed
     * @throws Exception
     * @author: hbh
     * @Time: 2020/12/22   11:09
     */
    public static function pullTagNew()
    {
        $branch = new tag();
        $branch->getTagNew();
        return $branch->getResult();
    }
}