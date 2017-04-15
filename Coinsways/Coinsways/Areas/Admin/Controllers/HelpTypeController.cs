using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Threading.Tasks;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class HelpTypeController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: Admin/HelpType
        public async Task<ActionResult> Index()
        {
            return View(await db.HelpTypes.ToListAsync());
        }

        // GET: Admin/HelpType/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Admin/HelpType/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> Create([Bind(Include = "ID,Name,IsActive")] HelpType helpType)
        {
            if (ModelState.IsValid)
            {
                db.HelpTypes.Add(helpType);
                await db.SaveChangesAsync();
                return RedirectToAction("Index");
            }

            return View(helpType);
        }

        // GET: Admin/HelpType/Edit/5
        public async Task<ActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            HelpType helpType = await db.HelpTypes.FindAsync(id);
            if (helpType == null)
            {
                return HttpNotFound();
            }
            return View(helpType);
        }

        // POST: Admin/HelpType/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> Edit([Bind(Include = "ID,Name,IsActive")] HelpType helpType)
        {
            if (ModelState.IsValid)
            {
                db.Entry(helpType).State = EntityState.Modified;
                await db.SaveChangesAsync();
                return RedirectToAction("Index");
            }
            return View(helpType);
        }

        // GET: Admin/HelpType/Delete/5
        public async Task<ActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            HelpType helpType = await db.HelpTypes.FindAsync(id);
            if (helpType == null)
            {
                return HttpNotFound();
            }
            return View(helpType);
        }

        // POST: Admin/HelpType/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> DeleteConfirmed(int id)
        {
            HelpType helpType = await db.HelpTypes.FindAsync(id);
            db.HelpTypes.Remove(helpType);
            await db.SaveChangesAsync();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
