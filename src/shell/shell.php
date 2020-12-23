<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/18   8:53
 */

namespace bydls\git\shell;

use bydls\git\config;

class shell
{

    /**获取分支列表
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   10:50
     */
    public static function branchList()
    {
        $prefix = config::branchPrefix();
        if ($prefix) return 'git branch -r | grep ' . $prefix;
        return 'git branch -r';
    }


    /**切换分支
     * @param string $branch
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   10:53
     */
    public static function changeBranch(string $branch)
    {
        return 'git checkout ' . $branch;
    }

    /**获取当前分支名称
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   11:41
     */
    public static function getBranchNow()
    {
        return 'git symbolic-ref --short -q HEAD';
    }

    /**获取远程所有标签
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   14:05
     */
    public static function getTagList()
    {
        return 'sudo git ls-remote --tags origin';
    }

    /**切换标签
     * @param string $tag
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   14:17
     */
    public static function changeTag(string $tag)
    {
        return 'sudo git checkout ' . $tag;
    }

    /**获取当前标签
     * @return string
     * @author: hbh
     * @Time: 2020/12/18   14:21
     */
    public static function getTagNow()
    {
        return 'sudo git describe --tags';
    }

    /**获取本地最新标签
     * @return string
     * @author: hbh
     * @Time: 2020/12/22   10:18
     */
    public static function getTagNew()
    {
        return 'sudo git describe --tags `git rev-list --tags --max-count=1`';
    }

    /**拉取最新标签到本地但不切换
     * @return string
     * @author: hbh
     * @Time: 2020/12/22   11:07
     */
    public static function pullTagNew()
    {
        return 'sudo git fetch --tags';
    }
}